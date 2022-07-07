@extends('layouts.main')

@section('container')
    
  <div class="container">
    <div class = "title text-center py-5">
        <h2 class = "position-relative d-inline-block py-3 mt-5 mb-3">All Products</h2>
    </div>
      <div class="row">
        @foreach ($produk as $p)
          <div class="col-md-3 mb-2 mb-5">
            <div class="card border-0"  >
                <div class="position-absolute px-4 py-2" style="background-color : rgba(0, 0, 0, 0.1)">
                    <a href="/kategori/{{ $p->category->namakategori }}" class="text-black text-decoration-none">{{ $p->category->namakategori }}</a></div>
                    @for ($i = 1; $i <= $produk->count()+1; $i++)
                        @if($p::find($i)!=null)
                            @if($p->namaproduk==$p::find($i)->namaproduk)
                                <img src="img/{{$p->namaproduk}}.jpg"  class = "w-100" width="300" height="300">
                            @endif
                        @endif
                    @endfor
                    <div class="text-center">
                        <div class = "rating mt-3">
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star"></i></span>
                        </div>
                        <p class = "text-capitalize my-1">{{ $p->namaproduk }}</p>
                        <span class = "fw-bold">Price : Rp {{ $p->harga }}</span> 
                        <div class="link text-center">
                            <a href = "/produk/{{ $p->slug }}" class = "btn btn-primary mt-3">Add to Cart</a>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>  

@endsection

