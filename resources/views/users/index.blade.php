@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <div class="fresh-table full-color-blue toolbar-color-blue">

                  <div class="toolbar">
                      <button id="alertBtn" class="btn btn-default">Alert</button>
                  </div>

                  <table id="fresh-table" class="table">
                      <thead>
                          <th data-field="id">ID</th>
                        <th data-field="name" data-sortable="true">Name</th>
                        <th data-field="salary" data-sortable="true">Salary</th>
                        <th data-field="country" data-sortable="true">Country</th>
                        <th data-field="city">City</th>
                        <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
                      </thead>
                      <tbody>
                          <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td>Sinaai-Waas</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td>Baileux</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td>Overland Park</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Alden Chen</td>
                            <td>$63,929</td>
                            <td>Finland</td>
                            <td>Gary</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>Colton Hodges</td>
                            <td>$93,961</td>
                            <td>Nicaragua</td>
                            <td>Delft</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Illana Nelson</td>
                            <td>$56,142</td>
                            <td>Heard Island</td>
                            <td>Montone</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Nicole Lane</td>
                            <td>$93,148</td>
                            <td>Cayman Islands</td>
                            <td>Cottbus</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Chaim Saunders</td>
                            <td>$5,502</td>
                            <td>Romania</td>
                            <td>New Quay</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Josiah Simon</td>
                            <td>$50,265</td>
                            <td>Christmas Island</td>
                            <td>Sint-Jans-Molenbeek</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>Ila Poole</td>
                            <td>$67,413</td>
                            <td>Montenegro</td>
                            <td>Pontevedra</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>Shana Mejia</td>
                            <td>$58,566</td>
                            <td>Afghanistan</td>
                            <td>Ballarat</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>15</td>
                            <td>Lana Ryan</td>
                            <td>$64,151</td>
                            <td>Martinique</td>
                            <td>Portobuffolè</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>16</td>
                            <td>Daquan Bender</td>
                            <td>$91,906</td>
                            <td>Sao Tome and Principe</td>
                            <td>Walhain-Saint-Paul</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>17</td>
                            <td>Connor Wagner</td>
                            <td>$86,537</td>
                            <td>Germany</td>
                            <td>Solihull</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>18</td>
                            <td>Boris Horton</td>
                            <td>$35,094</td>
                            <td>Laos</td>
                            <td>Saint-Mard</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>19</td>
                            <td>Winifred Ryan</td>
                            <td>$64,436</td>
                            <td>Ireland</td>
                            <td>Ronciglione</td>
                            <td></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Users') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Creation Date') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                        </td>
                                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="text-right">
                                            <div class="user-actions">
                                              @if ($user->id != auth()->id())
                                                  <form action="{{ route('user.destroy', $user) }}" method="post">
                                                      @csrf
                                                      @method('delete')

                                                      <a class="btn btn-secondary btn-sm" href="{{ route('user.edit', $user) }}">
                                                          <i class="fas fa-pen mr-2"></i>{{ __('Edit') }}
                                                      </a>
                                                      <button type="button" class="btn btn-danger btn-sm" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                          <i class="fas fa-trash mr-2"></i>{{ __('Delete') }}
                                                      </button>
                                                  </form>
                                              @else
                                                  <a class="btn btn-secondary btn-sm" href="{{ route('profile.edit', $user) }}">
                                                      <i class="fas fa-pen mr-2"></i>{{ __('Edit') }}
                                                  </a>
                                              @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $users->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('after-scripts')
  <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap-table.js" crossorigin="anonymous"></script>
  <script>
      var $table = $('#fresh-table'),
          $alertBtn = $('#alertBtn'),
          full_screen = false;

      $(document).ready(function(){
          $table.bootstrapTable({
              toolbar: ".toolbar",

              showRefresh: true,
              search: true,
              showToggle: true,
              showColumns: true,
              pagination: true,
              striped: true,
              pageSize: 8,
              pageList: [8,10,25,50,100],

              formatShowingRows: function(pageFrom, pageTo, totalRows){
                  //do nothing here, we don't want to show the text "showing x of y from..."
              },
              formatRecordsPerPage: function(pageNumber){
                  return pageNumber + " rows visible";
              },
              icons: {
                  refresh: 'fa fa-refresh',
                  toggle: 'fa fa-th-list',
                  columns: 'fa fa-columns',
                  detailOpen: 'fa fa-plus-circle',
                  detailClose: 'fa fa-minus-circle'
              }
          });



          $(window).resize(function () {
              $table.bootstrapTable('resetView');
          });


          window.operateEvents = {
              'click .like': function (e, value, row, index) {
                  alert('You click like icon, row: ' + JSON.stringify(row));
                  console.log(value, row, index);
              },
              'click .edit': function (e, value, row, index) {
                  alert('You click edit icon, row: ' + JSON.stringify(row));
                  console.log(value, row, index);
              },
              'click .remove': function (e, value, row, index) {
                  $table.bootstrapTable('remove', {
                      field: 'id',
                      values: [row.id]
                  });

              }
          };

          $alertBtn.click(function () {
              alert("You pressed on Alert");
          });

      });


      function operateFormatter(value, row, index) {
          return [
              '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                  '<i class="fa fa-heart"></i>',
              '</a>',
              '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                  '<i class="fa fa-edit"></i>',
              '</a>',
              '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                  '<i class="fa fa-remove"></i>',
              '</a>'
          ].join('');
      }


  </script>
@endpush
