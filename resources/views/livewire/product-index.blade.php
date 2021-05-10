

<div class="container">
<div class="row">
<div class="col-md-12">
<input class="form-control me-2 mb-3 mt-3" type="search" wire:model="search" placeholder="Search" aria-label="Search">
 {{$search}}
</div>


<h1>All Products:</h1>
@foreach($products as $product)
<div class="col-sm-4">
    <div class="card card-product" style="width:18rem">
        <img src="https://cdn.neow.in/news/images/uploaded/2019/07/1562628733_portege_x30-f_02_win10.jpg" alt="">
        <div class="card-header">
            {{$product -> name}}
        </div>
        <div class="card-body">
        {{$product -> descriptrion}}
        <br class="mt-3">Rp.{{$product -> price}}</br>
        </div>
        <div class="card-footer">
        <button wire:click="addToCart({{$product->product_id}})" class="btn btn-success" >Add to Cart</button>
        </div>
    </div>
</div>
@endforeach


</div>

</div>
