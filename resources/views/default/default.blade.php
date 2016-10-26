@include('default.header')
  <body>
    <header>
      <div class="row">
        <div class="medium-12 small-36 columns" id="logo">
          <img src="img/logo.svg" width="100%" />
        </div>
        <div class="medium-12 small-12 columns hide-for-medium">
          <ul class="menu li-floatRight" id="smallMenu">
            <li><a><i class="fi-list"></i></a></li>
          </ul>
        </div>
        <div class="medium-24 small-48 columns smallMenu hide-for-small-only">
          <nav>
            <ul class="menu">
              <li><a href="#">Início</a></li>
              <li><a href="#">Receitas</a></li>
              <li><a href="#">Cardápios</a></li>
              <li><a href="#">Usuários</a></li>
            </ul>
          </nav>
        </div>
        <div class="medium-12 small-48 columns textRight smallMenu hide-for-small-only">
          <ul class="menu li-floatRight">
            <li><a href="#">Logar</a></li>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <div class="row">
        <div class="medium-48 columns">
          <h2>Lorem ipsum</h2>
        </div>
        <div class="medium-16 columns">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae lacus bibendum, pulvinar purus condimentum, congue eros. Morbi pretium commodo libero, vitae cursus erat auctor et. Nulla blandit felis vel est venenatis malesuada. Praesent metus libero, efficitur sit amet mauris a, sagittis congue sem.
        </div>
        <div class="medium-16 columns">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae lacus bibendum, pulvinar purus condimentum, congue eros. Morbi pretium commodo libero, vitae cursus erat auctor et. Nulla blandit felis vel est venenatis malesuada. Praesent metus libero, efficitur sit amet mauris a, sagittis congue sem.
        </div>
        <div class="medium-16 columns">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae lacus bibendum, pulvinar purus condimentum, congue eros. Morbi pretium commodo libero, vitae cursus erat auctor et. Nulla blandit felis vel est venenatis malesuada. Praesent metus libero, efficitur sit amet mauris a, sagittis congue sem.
        </div>
      </div>
    </main>
@extends('default.footer')
