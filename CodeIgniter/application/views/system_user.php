<? $F = @$_SESSION['system_user_filter']; ?>



<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

<script>

  angular.module( 'body', [ ] ).controller( 'data', function ( $scope, $http ) {

    var page = 1;



    // Initialization Filter

    $scope.filter_key_from      = '<?= @$F['key_from'     ] ?>';
    $scope.filter_key_to        = '<?= @$F['key_to'       ] ?>';
    $scope.filter_mail          = '<?= @$F['mail'         ] ?>';
    $scope.filter_name          = '<?= @$F['name'         ] ?>';
    $scope.filter_authority     = '<?= @$F['authority'    ] ?>';
    $scope.filter_configuration = '<?= @$F['configuration'] ?>';
    $scope.filter_field         = '<?= @$F['field'        ] ?>';
    $scope.filter_order         = '<?= @$F['order'        ] ?>';
    $scope.filter_limit         = '<?= @$F['limit'        ] ?>';
    $scope.filter_page          = '<?= @$F['page'         ] ?>';



    // Initialization List

    function records( ) { $http.get( 'system_user/records' ).success( function( data ) { $scope.RS = data.RS; page = 1; } ); }

    records( );



    // Initialization Input Select List

    $http.get( 'system_authority/records' ).success( function( data ) { $scope.RS1 = data.RS; } );



    // Event Filter

    $scope.filter = function( ) {

      $http( { method : 'POST',
               headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
               url    : 'system_user/filter',
               data   : "key_from="      + $scope.filter_key_from      + "&" +
                        "key_to="        + $scope.filter_key_to        + "&" +
                        "mail="          + $scope.filter_mail          + "&" +
                        "name="          + $scope.filter_name          + "&" +
                        "authority="     + $scope.filter_authority     + "&" +
                        "configuration=" + $scope.filter_configuration + "&" +
                        "field="         + $scope.filter_field         + "&" +
                        "order="         + $scope.filter_order         + "&" +
                        "limit="         + $scope.filter_limit         + "&" +
                        "page="          + $scope.filter_page          } )

      .success( function( data ) { records( ); } );

    }



    // Event Input

    $scope.input = function( ) {

      var mode = ! $scope.key ? 'insert' : 'update' ;

      $http( { method : 'POST',
               headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
               url    : 'system_user/'          + mode,
               data   : "key="                  + $scope.key                  + "&" +
                        "key_system_authority=" + $scope.key_system_authority + "&" +
                        "mail="                 + $scope.mail                 + "&" +
                        "name="                 + $scope.name                 + "&" +
                        "authority="            + $scope.authority            + "&" +
                        "configuration="        + $scope.configuration        } )

      .success( function( data ) {

        if( data != 'null' ) {

          $scope.error_mail          = data.mail;
          $scope.error_name          = data.name;
          $scope.error_configuration = data.configuration;

        } else { records( ); $( '#input' ).modal( 'hide' ); }

      } );

    }



    // Event Delete

    $scope.delete = function( key ) {

      $http.get( "system_user/delete/" + key )

        .success( function( data ) { records( ); } );

    }



    // Event Record

    $scope.record = function( key ) {

        $http.get( "system_user/record/" + key )

          .success( function( data ) { $scope.key                  = data.key                  ? data.key                  : '';
                                       $scope.key_system_authority = data.key_system_authority ? data.key_system_authority : '';
                                       $scope.mail                 = data.mail                 ? data.mail                 : '';
                                       $scope.name                 = data.name                 ? data.name                 : '';
                                       $scope.authority            = data.authority            ? data.authority            : '';
                                       $scope.configuration        = data.configuration        ? data.configuration        : '';

                                       $scope.error_mail          = '';
                                       $scope.error_name          = '';
                                       $scope.error_configuration = ''; } );

    }



    // Event Records

    $scope.records = function( ) {

      $http.get( "system_user/records/" + page ++ ).success( function( data ) { $scope.RS = $scope.RS.concat( data.RS ); } );

    }



  } );

</script>



<!-- BEGIN CONTENT -->
<div class="page-content-wrapper" ng-app="body" ng-controller="data">
  <div class="page-content">

    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
      <div class="page-title">
        <h1><small><span class='theme-font-color'>System</span> ></small> User</h1>
      </div>
    </div>
    <!-- END PAGE HEAD -->

    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="row col-md-12 col-sm-12 margin-top-10">

      <!-- BEGIN PORTLET ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▼ FILTER ▼ -->
      <form class='form-horizontal' ng-submit='filter( );' onsubmit='return false;'>
        <div class="portlet light">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-magnet font-blue-sharp"></i>
              <span class="caption-subject theme-font-color bold uppercase">Filter</span>
              <span class="caption-helper"></span>
            </div>
            <div class="actions">
              <a href='#this' ng-click='filter( );' class="btn btn-circle btn-default">
                <i class="fa fa-search"></i>
                <span class="hidden-480">Search</span>
              </a>
            </div>
          </div>
          <div class="portlet-body">
            <div class='form-body'>

              <div class="form-group">
                <label class="col-md-2 control-label">Key</label>
                <div class="col-md-10">
                  <input type="text" ng-model="filter_key_from" placeholder="From" class="form-control input-xsmall inline"> ~
                  <input type="text" ng-model="filter_key_to"   placeholder="To"   class="form-control input-xsmall inline">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Mail</label>
                <div class="col-md-10">
                  <input type="text" ng-model='filter_mail' placeholder="Mail" class="form-control input-small inline">
                </div>
              </div>

             <div class="form-group">
                <label class="col-md-2 control-label">Name</label>
                <div class="col-md-10">
                  <input type="text" ng-model='filter_name' placeholder="Name" class="form-control input-small inline">
                </div>
              </div>

              <? if( A( 'system_user_authority' ) ) { ?>
                <div class="form-group">
                  <label class="col-md-2 control-label">Authority</label>
                  <div class="col-md-10">
                    <input type="text" ng-model="filter_authority" placeholder="Authority" class="form-control input-small inline">
                  </div>
                </div>
              <? } ?>

              <div class="form-group">
                <label class="col-md-2 control-label">Configuration</label>
                <div class="col-md-10">
                  <input type="text" ng-model="filter_configuration" placeholder="Configuration" class="form-control input-small inline">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Order by</label>
                <div class="col-md-10">
                  <select ng-model="filter_field" class="form-control input-small inline"">
                                                              <option value='key'          >Key          </option>
                                                              <option value='mail'         >Mail         </option>
                                                              <option value='name'         >Name         </option>
                    <? if( A( 'system_user_authority' ) ) { ?><option value='authority'    >Authority    </option><? } ?>
                                                              <option value='configuration'>Configuration</option>
                  </select>
                  <select ng-model="filter_order" class="form-control input-small inline"">
                    <option value='DESC'>Descend</option>
                    <option value='ASC' >Ascend </option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Limit</label>
                <div class="col-md-4">
                  <input type="text" ng-model="filter_limit" placeholder="Limit" class="form-control input-xsmall inline" maxlength='3'> Records / Page
                </div>
                <label class="col-md-2 control-label">Page</label>
                <div class="col-md-4">
                  <input type="text" ng-model="filter_page" placeholder="Page" class="form-control input-xsmall inline">
                </div>
              </div>

              <input type='submit' class='hidden'>
            </div>
          </div>
        </div>
      </form>
      <!-- END PORTLET ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▲ FILTER ▲ -->



      <!-- BEGIN PORTLET ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▼ LIST ▼ -->
      <div class="portlet light">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-list-ul font-blue-sharp"></i>
            <span class="caption-subject theme-font-color bold uppercase">LIST</span>
            <span class="caption-helper"></span>
          </div>
          <div class="actions">
            <a href="#input" data-toggle="modal" ng-click='record( );' class="btn btn-circle btn-default">
              <i class="fa fa-pencil"></i>
              <span class="hidden-480">Insert</span>
            </a>
          </div>
        </div>
        <div class="portlet-body">

          <table class="table table-striped table-hover margin-bottom-5">

            <thead>
              <tr>
                                                          <th>Key          </th>
                                                          <th>Mail         </th>
                                                          <th>Name         </th>
                <? if( A( 'system_user_authority' ) ) { ?><th>Authority    </th><? } ?>
                                                          <th>Configuration</th>
                                                          <th>Execution    </th>
              </tr>
            </thead>

            <tr ng-repeat='R in RS'>
              <td><a href="#content" data-toggle="modal" ng-click='record( R.key );'>{{ R.key }}</a></td>

                                                        <td>{{ R.mail          }}</td>
                                                        <td>{{ R.name          }}</td>
              <? if( A( 'system_user_authority' ) ) { ?><td>{{ R.authority     }}</td><? } ?>
                                                        <td>{{ R.configuration }}</td>

              <td>
                <a href="#input"  data-toggle="modal" ng-click='record( R.key );' title='Update' class="btn btn-xs default    "><i class="fa fa-pencil "></i></a>
                <a href="#delete" data-toggle="modal" ng-click='record( R.key );' title='Delete' class="btn btn-xs default red"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>

            <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
              <? if( A( 'system_user_authority' ) ) { ?><td></td><? } ?>
                                                        <td></td>

              <td><a href="#this" ng-click='records( );' title='More' class="btn btn-xs default blue"><i class="fa fa-plus"></i></a></td>
            </tr>

          </table>

      </div>
      <!-- END PORTLET ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▲ LIST ▲ -->

    </div>
    <!-- END PAGE CONTENT INNER -->



    <!-- BEGIN MODAL ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▼ INPUT ▼ -->
    <div class="modal fade bs-modal-lg" aria-hidden="true" tabindex="-1" role="input" id="input">
      <div class="modal-dialog modal-lg">
        <form class="modal-content form-horizontal" ng-submit='input( );' onsubmit='return false;'>
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal"></button>
            <h4 class="modal-title"><span id='address_input'></span> Input</h4>
          </div>
          <div class="modal-body margin-top-15">
            <div class='form-body'>

              <div class="form-group">
                <label class="col-md-2 control-label">key</label>
                <div class="col-md-10">
                  <input type='text' ng-model='key' placeholder="Key" class="form-control input-small inline" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Mail</label>
                <div class="col-md-10">
                  <input type='text' ng-model='mail' placeholder="Mail" class="form-control input-medium inline">
                  <span class='help-block text-danger'>{{ error_mail }}</span>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Name</label>
                <div class="col-md-10">
                  <input type='text' ng-model='name' placeholder="Name" class="form-control input-medium inline">
                  <span class='help-block text-danger'>{{ error_name }}</span>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Authority</label>
                <div class="col-md-10">
                  <select class="form-control input-xlarge inline" ng-model='key_system_authority'>
                    <option></option>
                    <option ng-repeat='R1 in RS1' ng-selected='{{ R1.key == R.key_system_authority }}' value='{{ R1.key }}'>{{ R1.name }}</option>
                  </select><br />
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Configuration</label>
                <div class="col-md-10">
                  <textarea ng-model='configuration' placeholder="Configuration" class="form-control input-xlarge inline"></textarea>
                  <span class='help-block text-danger'>{{ error_configuration }}</span>
                </div>
              </div>

              <input type='submit' class='hidden'>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn blue"    ng-click='input( );'>Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END MODAL ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▲ INPUT ▲ -->



    <!-- BEGIN MODAL ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▼ CONTENT ▼ -->
    <div class="modal fade bs-modal-lg" aria-hidden="true" tabindex="-1" role="content" id="content">
      <div class="modal-dialog modal-lg">
        <div class="modal-content form-horizontal">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal"></button>
            <h4 class="modal-title"><span id='address_input'></span> Content</h4>
          </div>
          <div class="modal-body margin-top-15">
            <div class='form-body'>

              <div class="form-group">
                <label class="col-md-2 control-label">key</label>
                <div class="col-md-10 form-control-static">{{ key }}</div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Mail</label>
                <div class="col-md-10 form-control-static">{{ mail }}</div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Name</label>
                <div class="col-md-10 form-control-static">{{ name }}</div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Authority</label>
                <div class="col-md-10 form-control-static">{{ authority }}</div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Configuration</label>
                <div class="col-md-10 form-control-static">{{ configuration }}</div>
              </div>

              <input type='submit' class='hidden'>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▲ CONTENT ▲ -->



    <!-- BEGIN MODAL ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▼ DELETE ▼ -->
    <div class="modal fade bs-modal-lg" aria-hidden="true" tabindex="-1" role="delete" id="delete">
      <div class="modal-dialog modal-lg">
        <form class="modal-content form-horizontal">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal"></button>
            <h4 class="modal-title"><span id='address_input'></span> Delete</h4>
          </div>
          <div class="modal-body margin-top-5">

              Are you sure to delete key {{ key }} record...?

          </div>
          <div class="modal-footer">
            <button type="button" class="btn default" data-dismiss="modal"                          >Cancel</button>
            <button type="button" class="btn blue"    data-dismiss="modal" ng-click='delete( key );'>Delete</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END MODAL ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ▲ DELETE ▲ -->



  </div>
</div>
<!-- END CONTENT -->



<? /*

권한 확인

권한 연계 테이블

로그인은 권한 관련 문제로 밖으로 빼는 것이 맞는 듯...

.htacese 설정

*/ ?>
