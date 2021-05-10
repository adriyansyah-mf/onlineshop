<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Shop Cart
            </div>
                <div class="card-body">
                
                    
                    @foreach ($cart['products'] as $products)
                    <?php error_reporting(0); ?>
                        <li class="list-group-item">
                        <span>{{ $products->name }} | Price : {{ $products->price }}</span>
                        <div class="float-right">
                        <a wire:click="removeItem({{$products->product_id}})" class="btn btn-danger text-white">Remove</a>
                        </li>
                       
                        </div>
                        @endforeach
                        
                </div>
                <div class="card-footer">
                
                @if($cart['products'])
                    <form action="/checkout" method="post">
                    {{ csrf_field() }}
                    <div class="container">
                        <div class="row">
                        <input type="text" placeholder="nama" name="nama" class="form-control mt-3">
                        <input type="text" placeholder="alamat" name="alamat" class="form-control mt-3">
                        <input type="phone" placeholder="telepon" name="telepon" class="form-control mt-3">
                        <input type="email" placeholder="email" name="email" class="form-control mt-3">
                        <textarea name="nama_product" id="nama_product" cols="30" rows="10" class="form-control mt-3">
                        @foreach ($cart['products'] as $products)
                        {{$products->name}}
                        @endforeach
                        </textarea>
                        <button wire:click="checkout"  class="mt-3 btn btn-success float-rigt">
                    Checkout
                    </button>
                    </div>
</div>
                    </form>

                    @endif
                </div>
        </div>
    </div>
</div>