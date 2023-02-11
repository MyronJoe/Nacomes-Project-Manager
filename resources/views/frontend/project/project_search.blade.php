<style>

    body {
        background-color: #eee
    }

    .card {
        background-color: #fff;
        padding: 10px;
        border: none
    }

    .input-box {
        position: relative
    }

    .input-box i {
        position: absolute;
        right: 13px;
        top: 10px;
        color: #ced4da
    }
/* 
    .form-control {
        height: 30px;
        background-color: #eeeeee69
    }

    .form-control:focus {
        background-color: #eeeeee69;
        box-shadow: none;
        border-color: #eee
    } */

    .list {
        padding-top: 20px;
        padding-bottom: 10px;
        display: flex;
        align-items: center
    }

    .border-bottom {
        border-bottom: 2px solid #eee
    }

    .list i {
        font-size: 19px;
        color: red
    }

    .list small {
        color: #dedddd
    }
    </style>






    <div class="container mt-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-6">
                <div class="card">

                    @forelse($products as $item)
      <a href="{{ url('product/details/'. $item->id. '/'.$item->name) }}">

    <div class="d-flex flex-column ml-3" style="margin-left: 10px"> <span>{{ $item->name }} </span>   </div>

    <div class="d-flex flex-column ml-3" style="margin-left: 10px"> <span>{{ $item->email }} </span>   </div>
    </div></a>

    @empty
         <h3 class="text-danger text-center">No Project Found</h3>
    @endforelse

                </div>
            </div>
        </div>
    </div>
