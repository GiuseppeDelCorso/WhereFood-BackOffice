@extends('layouts.app')
@section('content')
<div class="back"> 
<main>
    
        <div class="container-fluid pt-5 ps-5 jumbo ">
            <div class="row">
                    <div class="col-6 mb-5">
                        <h1 class="mb-3">Benvenuto nella tua vetrina virtuale!</h1>
                        <p>Siamo entusiasti di darti il benvenuto nella nostra community culinaria.
                            Qui potrai condividere le tue prelibatezze con un pubblico sempre crescente.
                            Esponi i tuoi migliori piatti, raggiungi nuovi clienti e fai crescere il tuo business con il nostro supporto dedicato.
                            Siamo pronti a far brillare la tua cucina online.<br>
                            <b>Benvenuto a bordo!</b></p>
                    </div>
            </div>
        </div>
    </main>
</div>

    <footer>
        <div class="footer-h">
            <div class="d-flex justify-content-between wrapper">
                <div class="f-wrapper">
                    <ul>
                        <li class="title">Scopri Wherefood</li>
                        <li>Investitori</li>
                        <li>Chi siamo</li>
                        <li>Ristoranti</li>
                        <li>Altro</li>
                        <li>Programmazione</li>
                        <li>Design</li>
                        <li>Lavora con noi</li>
                        <li>Diventa nostro partner</li>
                    </ul>
                </div>
                <div class="f-wrapper">
                    <ul>
                        <li class="title">Note legali</li>
                        <li>Termini & condizioni</li>
                        <li>Informativa sulla privacy</li>
                        <li>Cookies</li>
                        <li>Richieste da parte delle Autorità Pubbliche</li>
    
                    </ul>
                </div>
                <div class="f-wrapper">
                    <ul>
                        <li class="title">Aiuto</li>
                        <li>Contatti</li>
                        <li>FAQ</li>
                        <li>Tipi di cucina</li>
    
                    </ul>
                </div>
                <div class="f-wrapper">
                    <p class="title">Porta Wherefood con te</p>
                    <img src="storage/welcome-img/appStore.svg.png" alt="">
                    <img src="storage/welcome-img/google-play-badge.png" alt="">
    
                </div>
            </div>
        </div>
    </footer>
    
    
    @endsection
    
<style>

    .jumbo{
        background-image: url(storage/welcome-img/tomato.jpg);
        background-position: center;
        background-size: cover;
    }
    .footer-h {
    width: 100%;
    height: 50vh;
    background-image: url(storage/welcome-img/footer-background.jpg);



}

ul li {
    list-style: none;
    color: rgb(118, 118, 118);
    font-size: 14px;
    padding: 0;
}

.wrapper {
    padding: 1rem 5rem;
    margin: 0 auto;
}

.f-wrapper {
    height: 250px;
    width: calc(100% / 4);
    display: flex;
    flex-direction: column;
    margin: 1rem;
    background-color: rgba(0, 0, 0, 0.393);
    padding: 1rem;
    border-radius: 15px;

}

img {
    width: 50%;
    margin-top: 1rem;
}

.title {
    font-size: 20px;
    font-weight: 800;
    color: #53fc5b;
    margin-bottom: 1rem;
}

p {
    font-size: 20px;
    font-weight: 800;
}

@media screen and (max-width: 768px) {
    .footer-h {
        height: 200px !important;
    }

    .wrapper {

        padding: 0.25rem 0.25rem;

    }

    .title {
        font-size: 10px !important;
        margin-bottom: 0.25rem;
    }

    li {
        font-size: 8px !important;

    }

    .f-wrapper {
        margin: 0.25rem;
        padding: 0.25rem;
        height: 180px !important;
    }

    img {
        width: 100%;
    }

    ul {
        padding-left: 0rem;
    }
}

@media screen and (max-width : 1200px) {
    .footer-h {
        height: 400px;
    }

    .f-wrapper {
        height: 290px;
        padding-bottom: 2rem;
    }

    ul {
        padding: 0;
    }

    img {
        width: 100%;
    }

}
</style>