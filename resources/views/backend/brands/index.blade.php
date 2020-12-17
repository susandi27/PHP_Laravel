@extends('backend_master')
@section('content')
  
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Brands</h1>
                <p>A free and open source Bootstrap 4 admin template</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Brands</a></li>
            </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
                <h4 class="d-inline-block">Brands List</h4>
                <a href="{{route('brands.create')}}" class="btn btn-success float-right">Add New</a>

                <div class="table-responsive mt-3">
                  <table class="table table-bordered" id="sampleTable">
                    <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=1; @endphp
                      @foreach($brands as $brand)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$brand->name}}</td>
                        <td><img src="{{asset($brand->logo)}}" width="100"></td>
                        <td>
                          <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning btn-sm">Edit</a>
                          <form method="post" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>   
        </div>    
  </main>
@endsection

@section('script')
    <script type="text/javascript" src="{{  asset('backend_assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('backend_assets/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection
