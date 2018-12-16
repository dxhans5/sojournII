<!-- Stored in resources/views/child.blade.php -->

@extends('main')

@section('title', 'Homepage')

@section('content')

<div id='rules-wrapper'>
  <div class='container'>
    <div class='pt-small pb-small text-center'>

      <div class='row pt-4'>
        <div class='col-sm-12 text-5'>
          Sojourn II Rules
        </div>
      </div>

      <div class='row pt-4'>
        <div class='col-sm-6 offset-sm-3'>
          <a href="rules#general"><button type="button" class="btn btn-orange btn-lg btn-block text-12 mb-small">General Rules</button></a>
          <a href='rules#pvp'><button type="button" class="btn btn-orange btn-lg btn-block text-12 mb-small">PvP Rules</button></a>
          <a href='rules#seige'><button type="button" class="btn btn-orange btn-lg btn-block text-12 mb-small">Capital Seige Rules</button></a>
          <a href='rules#building'><button type="button" class="btn btn-orange btn-lg btn-block text-12 mb-small">Building Rules</button></a>
        </div>
      </div>

    </div>

  </div>
</div>


<a name='general'></a>
<div class='container pt-small pb-small'>
  <div class='row'>
    <div class='col-sm-12 text-6'>
      General Rules
      <div class='hr'></div>
    </div>
  </div>

  <div class='row'>
    <div class='col-sm-12 text-10'>
      <ul class='mt-4'>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> Please respect other players and don't be disruptive to the play space.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> No Cheating, exploiting, or hacking.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> No racist speak (unless it's RP and regarding an in game religion).</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> Mind your fellow players. If you know there is a young child playing...watch your mouth.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> No frequent teamkilling, spawnkilling, harassing or other such conduct.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> Remain civil on the forums and in-game chat.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> We're all gamers...we play for fun. Have fun, and be friendly :)</li>

      </ul>

    </div>
  </div>
</div>
</div>

<a name='pvp'></a>
<div class='container pt-small pb-small'>
  <div class='row'>
    <div class='col-sm-12 text-6'>
      PvP Rules
      <div class='hr'></div>
    </div>
  </div>

  <div class='row'>
    <div class='col-sm-12 text-10'>
      <ul class='mt-4'>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> KOS is allowed. If you don't know someone and they are running at you with a sword...run or fight.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> Offline raiding is allowed (though discouraged) except for land claim raiding.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> Clan capitals are safe from raiding until a competing clan declares a seige (see seige rules below).</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> All is fair in love and war...and there is a lot of war here.</li>
        <li><i class="fas fa-chevron-right pr-4 orange"></i> <strong>Don't get mad about getting killed or raided. Rebuild and get revenge.</strong></li>
      </ul>

    </div>
  </div>
</div>
</div>

<a name='seige'></a>
<div class='container pt-small pb-small'>
  <div class='row'>
    <div class='col-sm-12 text-6'>
      Capital Seige Rules
      <div class='hr'></div>
    </div>
  </div>

  <div class='row'>
    <div class='col-sm-12 text-10'>
      <ul class='mt-4'>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Clans who own land must have a capital built within 48 hours of claiming land.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Capitals must have a single Iron Throne in a location that is not hidden.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Capitals must exist of a single building of any size.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Outlying buildings or structures may not be placed at a capital that prohibits trebs from being placed.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Raids against clan capitals must be declared on Discord (#capital-raids) 24 hours ahead of time.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Capital raids may only last six hours, after which a victory must be declared or the raid is failed.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> To declare victory a member of the rival clan must post a screenshot them sitting in the Iron Throne.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Victory screenshots must be posted to #capital-raids 1 hour after the declared end of the raid.</li>
      </ul>

    </div>
  </div>
</div>
</div>

<a name='building'></a>
<div class='container pt-small pb-small'>
  <div class='row'>
    <div class='col-sm-12 text-6'>
      Building Rules
      <div class='hr'></div>
    </div>
  </div>

  <div class='row'>
    <div class='col-sm-12 text-10'>
      <ul class='mt-4'>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Do not block Thrall spawns, POI, journals or receipes.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> If you build in a clan claim area, you are at the mercy of the clan. Period.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Building in tunnels and main pathways is permitted, but not encouraged (don't cry when you get blown apart).</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Buildings that admins find that have been raided and obviously abandonded will be pulled down.</li>
      <li><i class="fas fa-chevron-right pr-4 orange"></i> Please report abandoned buildings on the #abandoned-buildings board.</li>
      </ul>

    </div>
  </div>
</div>
</div>
@endsection