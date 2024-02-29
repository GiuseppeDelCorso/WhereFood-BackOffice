@extends('layouts.app')
@section('content')
<div class="back"> 
<main>
    
        <div class="container-fluid pt-5 ps-5 jumbo ">
            <div class="row">
                    <h1>Benvenuti su wherefood</h1>
                    <p>L'applicazione che ti permette di ordinare il tuo piatto preferito quando vuoi. </p>
                    <p>Tu ordina e ci pensiamo noi!!</p>
                    <p>Scegli la cucina che preferisci di più, dall'America fino al Giappone.</p>
                  
            </div>
        </div>
        
    </main>
</div>

    <footer>
        <div class="container-fluid pt-5 ps-5">
                  <div class="row">
                <div class="col-3 box">
                    <h5>Scopri Wherefood</h5>
                    <ul>
                        <li>Chi Siamo</li>
                        <li>Ristoranti</li>
                        <li>Altro</li>
                        <li>Lavora con noi</li>
                    </ul>
                </div>

                <div class="col-3 box">
                    <h5>Note Legali</h5>
                    <ul>
                        <li>Termini & Condizioni</li>
                        <li>Informativa sulla privacy</li>
                        <li>Cookies</li>
                    </ul>
                </div>
                
                <div class="col-3 box">
                    <h5>Aiuto</h5>
                    <ul>
                        <li>FAQ</li>
                        <li>Contatti</li>
                        <li>Tipi di cucina</li>
                    </ul>
                </div>
                
                    <div class="col-3 box">
                        <h5>Porta Wherefood con te</h5>
                        <button type="button" class="btn btn-light">Dowload</button>
                    </div>
              </div>
            </div>

            <div class="firma">
                Progettato da Andrea Francioni, Giuseppe Del Corso, Michele Piccillo, Emanuele Guerra, Emanuele Khushi
            </div>
    </footer>
    
    
    @endsection
    
    
    <style>.jumbo{
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        height: 87%;
    }</style>

<style>img{
    width: 33%;
}</style>

<style>.hamburger{
    padding-top: 25%;
    width: 30%;
}</style>

<style>.back{
    background-image: url(/storage/welcome-img/back.jpeg);
}</style>

<style>footer{
    color: white;
    background-color: #222222;
    font-family: Arial, Helvetica, sans-serif;
}</style>

<style>li{
    list-style: none;
    position: relative;
    right: 13%;
  }</style>

<style>.firma{
    padding-top: 5%;
    text-align: center;
    opacity: 40%;
  }</style>