@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 dark">
        <div class="row justify-content-center">
            <h1 class="h1 text-center" id="pageHeaderTitle">I Miei Prodotti</h1>
    @foreach ($products as $product)
                
    <section class="dark">
	<div class="container py-4">
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
                <img class="postcard__img" src="{{asset("storage/".$product->image)}}" alt="{{ $product->name }}">
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue">{{ $product->name }}</h1>
				<div class="postcard__subtitle small">
					<div class="PriceStyle d-flex">
                        <div class="fs-7">
                            <i class="fa-solid fa-dollar-sign fs-7"></i>
                            {{ $product->price }}
                        </div>
					</div>
				</div>
				<div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $product->description }}</div>
                <div class="IngredientiStyle">Ingredienti</div>
				<div class="postcard__preview-txt py-2">{{ $product->ingredients }}</div>
				<ul class="postcard__tagbox d-flex ">
					<li class="tag__item pt-3">
                        <i class="fa-solid fa-pen-to-square mr-2"></i>
                        <a type="button"  href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
                    </li>
                    <li class="tag__item pt-3">
                    <form id="deleteProductForm{{$product->id}}" action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                        @csrf
                            @method('DELETE')
                            <i class="fa-solid fa-trash mr-2"></i>
                            <a href="#" class=" deleteProductButton" data-toggle="modal" data-target="#confirmDeleteModal{{$product->id}}">Elimina</a>
                        </form>
                    </li>
                    <li class="tag__item pt-3">
                        <div class="card-body">Visibile:
                               @if($product->visibility == 1)
                                   Si
                               @else
                                   Nascosto
                                @endif
                      </div>
                    </li>
				</ul>
			</div>
		</article>
		
		
		
	</div>
</section>
                <div class="modal fade" id="confirmDeleteModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel{{$product->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel{{$product->id}}">Conferma eliminazione</h5>
                            </div>
                            <div class="modal-body">
                                Vuoi eliminare questo prodotto?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary cancelDeleteButton">Annulla</button>

                                <button type="button" class="btn btn-danger confirmDeleteButton" data-product-id="{{$product->id}}">Elimina</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
    $(document).ready(function() {
        
        $('.deleteProductButton').click(function(event) {
            event.preventDefault(); 
            var productId = $(this).closest('form').attr('id').replace('deleteProductForm', ''); 
            $('#confirmDeleteModal' + productId).modal('show'); 
        });

        
        $('.confirmDeleteButton').click(function(event) {
            var productId = $(this).data('product-id');
            $('#deleteProductForm' + productId).submit(); 
        });

        
        $('.cancelDeleteButton').click(function(event) {
            $(this).closest('.modal').modal('hide'); 
        });
    });
</script>


@endsection





<style>
    .card{
        padding: 10px;
        margin: 10px;
    }
    .card-img{
        height: 250px;
        width: 200px;
    }
    .card-img img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center
    }
    .hc{
        height: 700px !important;
    }
    .bgCard{
        background-color: rgb(188, 226, 228) !important;
    }
    .fs-7{
        font-size: 30px;
    }
    .FontStyleName{
        font-weight: bold;
    }
    .IngredientiStyle{
       font-weight: bold;
        font-size: 20px;
    }
    
    
    @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
$main-green: #79dd09 !default;
$main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
$main-yellow: #bdbb49 !default;
$main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
$main-red: #bd150b !default;
$main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
$main-blue: #0076bd !default;
$main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

/* This pen */
body {
	font-family: "Baloo 2", cursive;
	font-size: 16px;
	color: #ffffff;
	text-rendering: optimizeLegibility;
	font-weight: initial;
}

.dark {
	background: #110f16;
}


.light {
	background: #f3f5f7;
}

a, a:hover {
	text-decoration: none;
	transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
	margin: 2rem 0;
	text-transform: uppercase;
	text-align: center;
	font-size: 2.5rem;
}

/* Cards */
.postcard {
  flex-wrap: wrap;
  display: flex;
  
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
  border-radius: 10px;
  margin: 0 0 2rem 0;
  overflow: hidden;
  position: relative;
  color: #ffffff;

	&.dark {
		background-color: #18151f;
	}
	&.light {
		background-color: #e1e5ea;
	}
	
	.t-dark {
		color: #18151f;
	}
	
  a {
    color: inherit;
  }
	
	h1,	.h1 {
		margin-bottom: 0.5rem;
		font-weight: 500;
		line-height: 1.2;
	}
	
	.small {
		font-size: 80%;
	}

  .postcard__title {
    font-size: 1.75rem;
  }

  .postcard__img {
    max-height: 180px;
    width: 100%;
    object-fit: contain;
    position: relative;
  }

  .postcard__img_link {
    display: contents;
  }

  .postcard__bar {
    width: 50px;
    height: 10px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #424242;
    transition: width 0.2s ease;
  }

  .postcard__text {
    padding: 1.5rem;
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .postcard__preview-txt {
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    height: 100%;
  }

  .postcard__tagbox {
    display: flex;
    flex-flow: row wrap;
    font-size: 16px;
    margin: 20px 0 0 0;
		padding: 0;
    justify-content: center;

    .tag__item {
      display: inline-block;
      background: rgba(83, 83, 83, 0.4);
      border-radius: 5px;
      padding: 2.5px 20px;
      margin: 0 5px 5px 0;
      cursor: default;
      user-select: none;
      transition: background-color 0.3s;

      &:hover {
        background: rgba(83, 83, 83, 0.8);
      }
    }
  }

  &:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
    opacity: 1;
    border-radius: 10px;
  }

  &:hover .postcard__bar {
    width: 100px;
  }
}

@media screen and (min-width: 769px) {
  .postcard {
    flex-wrap: inherit;

    .postcard__title {
      font-size: 2rem;
    }

    .postcard__tagbox {
      justify-content: start;
    }

    .postcard__img {
      max-width: 300px;
      max-height: 100%;
      transition: transform 0.3s ease;
    }

    .postcard__text {
      padding: 3rem;
      width: 100%;
    }

    .media.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      background: #18151f;
      top: -20%;
      height: 130%;
      width: 55px;
    }

    &:hover .postcard__img {
      transform: scale(1.1);
    }

    &:nth-child(2n+1) {
      flex-direction: row;
    }

    &:nth-child(2n+0) {
      flex-direction: row-reverse;
    }

    &:nth-child(2n+1) .postcard__text::before {
      left: -12px !important;
      transform: rotate(4deg);
    }

    &:nth-child(2n+0) .postcard__text::before {
      right: -12px !important;
      transform: rotate(-4deg);
    }
  }
}
@media screen and (min-width: 1024px){
		.postcard__text {
      padding: 2rem 3.5rem;
    }
		
		.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      
      top: -20%;
      height: 130%;
      width: 55px;
    }
	
  .postcard.dark {
		.postcard__text:before {
			background: #18151f;
		}
  }
	.postcard.light {
		.postcard__text:before {
			background: #e1e5ea;
		}
  }
}

/* COLORS */
.postcard .postcard__tagbox .green.play:hover {
	background: $main-green;
	color: black;
}
.green .postcard__title:hover {
	color: $main-green;
}
.green .postcard__bar {
	background-color: $main-green;
}
.green::before {
	background-image: linear-gradient(
		-30deg,
		$main-green-rgb-015,
		transparent 50%
	);
}
.green:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .blue.play:hover {
	background: $main-blue;
}
.blue .postcard__title:hover {
	color: $main-blue;
}
.blue .postcard__bar {
	background-color: $main-blue;
}
.blue::before {
	background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
}
.blue:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .red.play:hover {
	background: $main-red;
}
.red .postcard__title:hover {
	color: $main-red;
}
.red .postcard__bar {
	background-color: $main-red;
}
.red::before {
	background-image: linear-gradient(-30deg, $main-red-rgb-015, transparent 50%);
}
.red:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-red-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .yellow.play:hover {
	background: $main-yellow;
	color: black;
}
.yellow .postcard__title:hover {
	color: $main-yellow;
}
.yellow .postcard__bar {
	background-color: $main-yellow;
}
.yellow::before {
	background-image: linear-gradient(
		-30deg,
		$main-yellow-rgb-015,
		transparent 50%
	);
}
.yellow:nth-child(2n)::before {
	background-image: linear-gradient(
		30deg,
		$main-yellow-rgb-015,
		transparent 50%
	);
}

@media screen and (min-width: 769px) {
	.green::before {
		background-image: linear-gradient(
			-80deg,
			$main-green-rgb-015,
			transparent 50%
		);
	}
	.green:nth-child(2n)::before {
		background-image: linear-gradient(
			80deg,
			$main-green-rgb-015,
			transparent 50%
		);
	}

	.blue::before {
		background-image: linear-gradient(
			-80deg,
			$main-blue-rgb-015,
			transparent 50%
		);
	}
	.blue:nth-child(2n)::before {
		background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
	}

	.red::before {
		background-image: linear-gradient(-80deg, $main-red-rgb-015, transparent 50%);
	}
	.red:nth-child(2n)::before {
		background-image: linear-gradient(80deg, $main-red-rgb-015, transparent 50%);
	}
	
	.yellow::before {
		background-image: linear-gradient(
			-80deg,
			$main-yellow-rgb-015,
			transparent 50%
		);
	}
	.yellow:nth-child(2n)::before {
		background-image: linear-gradient(
			80deg,
			$main-yellow-rgb-015,
			transparent 50%
		);
	}
}

</style>