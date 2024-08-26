@extends('layouts.master')
@section('title') User @endsection

@section('customstyle')
    @vite(['resources/css/public-profile.css'])
@endsection

@section('content')

<div class="container">
    <div class="profile-header">
      <div class="profile-img">
        <img src="{{route('home')}}/storage/{{$user->avatar ?? '/avatars/avatar7.png'}}" width="200" alt="Profile Image">
      </div>
      <div class="profile-nav-info">
        <h3 class="user-name">{{$user->name}}</h3>
        <div class="address">
          <p id="state" class="state">{{$user->city}}</p>
          <span id="country" class="country">{{$user->country}}.</span>
        </div>
  
      </div>
      {{-- <div class="profile-option">
        <div class="notification">
          <i class="fa fa-bell"></i>
          <span class="alert-message">3</span>
        </div>
      </div> --}}
    </div>
  
    <div class="main-bd">
      <div class="left-side">
        <div class="profile-side">
          <p class="mobile-no"><i class="fa fa-phone"></i>{{$user->contact}}</p>
          <p class="user-mail"><i class="fa fa-envelope"></i> {{$user->email}}</p>
          <div class="user-bio">
            <h3>Bio</h3>
            <p class="bio">
                {{$user->bio}}
            </p>
          </div>

          <div class="social-menu">
                <ul>
                    <li><a href="https://github.com/sanketbodke" target="blank"><i class="fab fa-github"></i></i></a></li>
                    <li><a href="https://www.instagram.com/imsanketbodke/" target="blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/sanket-bodake-995b5b205/" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://codepen.io/sanketbodke"><i class="fab fa-codepen" target="blank"></i></a></li>
                </ul>
            </div>
        </div>
  
      </div>
      <div class="right-side">
  
        <div class="nav">
          <ul>
            <li onclick="tabs(0)" class="user-post active">Posts</li>
            <li onclick="tabs(1)" class="user-review">About</li>
            <li onclick="tabs(2)" class="user-setting"> Jobs</li>
          </ul>
        </div>
        <div class="profile-body">
          <div class="profile-posts tab">
            <h1>Your Post</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quia sunt itaque ut libero cupiditate ullam qui velit laborum placeat doloribus, non tempore nisi ratione error rem minima ducimus. Accusamus adipisci quasi at itaque repellat sed
              magni eius magnam repellendus. Quidem inventore repudiandae sunt odit. Aliquid facilis fugiat earum ex officia eveniet, nisi, similique ad ullam repudiandae molestias aspernatur qui autem, nam? Cupiditate ut quasi iste, eos perspiciatis maiores
              molestiae.</p>
          </div>
          <div class="profile-reviews tab">
            <h1>User</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam pariatur officia, aperiam quidem quasi, tenetur molestiae. Architecto mollitia laborum possimus iste esse. Perferendis tempora consectetur, quae qui nihil voluptas. Maiores debitis
              repellendus excepturi quisquam temporibus quam nobis voluptatem, reiciendis distinctio deserunt vitae! Maxime provident, distinctio animi commodi nemo, eveniet fugit porro quos nesciunt quidem a, corporis nisi dolorum minus sit eaque error
              sequi ullam. Quidem ut fugiat, praesentium velit aliquam!</p>
          </div>
          <div class="profile-settings tab">
            <div class="account-setting">
              <h1>Jobs</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit omnis eaque, expedita nostrum, facere libero provident laudantium. Quis, hic doloribus! Laboriosam nemo tempora praesentium. Culpa quo velit omnis, debitis maxime, sequi
                animi dolores commodi odio placeat, magnam, cupiditate facilis impedit veniam? Soluta aliquam excepturi illum natus adipisci ipsum quo, voluptatem, nemo, commodi, molestiae doloribus magni et. Cum, saepe enim quam voluptatum vel debitis
                nihil, recusandae, omnis officiis tenetur, ullam rerum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(".nav ul li").click(function() {
  $(this)
    .addClass("active")
    .siblings()
    .removeClass("active");
});

const tabBtn = document.querySelectorAll(".nav ul li");
const tab = document.querySelectorAll(".tab");

function tabs(panelIndex) {
  tab.forEach(function(node) {
    node.style.display = "none";
  });
  tab[panelIndex].style.display = "block";
}
tabs(0);

let bio = document.querySelector(".bio");
const bioMore = document.querySelector("#see-more-bio");
const bioLength = bio.innerText.length;

function bioText() {
  bio.oldText = bio.innerText;

  bio.innerText = bio.innerText.substring(0, 100) + "...";
  bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
}
//   console.log(bio.innerText)

bioText();

function addLength() {
  bio.innerText = bio.oldText;
  bio.innerHTML +=
    "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
  document.getElementById("see-less-bio").addEventListener("click", () => {
    document.getElementById("see-less-bio").style.display = "none";
  });
}
if (document.querySelector(".alert-message").innerText > 9) {
  document.querySelector(".alert-message").style.fontSize = ".7rem";
}
</script>
<script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
@endsection