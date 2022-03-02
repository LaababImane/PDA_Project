<main class="profile">
  <div class="profile-bg"></div>
  <section class="container">
    <aside class="profile-image">
    <img src="https://i.ytimg.com/vi/1Ne1hqOXKKI/maxresdefault.jpg" width="300"
                            class="border mp-1 rounded-circle">
    </aside>
    <section class="profile-info">
      <h1 class="first-name"><?= $Auth["Nom"]; ?></h1>
      <h1 class="second-name"><?= $Auth["Prenom"]; ?></h1>
      <h2>ABOUT</h2>
      <p>
        hello hello, I'm angela, artist and developer 🌼 student at stanford; intern at zynga 🌱 happy to be here! 🌿 let's code the best we can!
      </p>

      <aside class="social-media-icons">
      
      </aside>
    </section>
  </section>
  <section class="statistics">
    
    <p><strong></strong> </p>
    <p><strong></strong> </p>
    <p><strong></strong> </p>
  </section>
  <button class="icon close"></button>
</main>                                   


<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:600");
@import url("https://fonts.googleapis.com/css?family=Montserrat:800");
@import url("https://fonts.googleapis.com/css?family=Montserrat");
body {
  font-family: "Montserrat", sans-serif;
  background-size: 150% 150%;
  animation: backgroundAnimation 10s ease infinite;
  
 
}

.profile {
  animation: loadProfile 0.6s ease-in-out;
  animation-fill-mode: both;
  font-size: 1.5rem;
  display: flex;
  flex-direction: column;
  position: relative;
  max-height: 750px;
  max-width: 900px;
}

.profile-bg {
  position: absolute;
  bottom: 0;
  right: 0;
  border-radius: 10px;
  background: white;
  box-shadow: 0 30px 50px -20px rgba(14, 0, 47, 0.21);
  width: calc(100% - 75px);
  height: calc(100% - 110px);
  z-index: -1;
}

.container {
  display: flex;
  flex-direction: row;
  align-items: stretch;
  width: 100%;
} 

.profile-image {
  animation: loadProfileImage 1s ease-in-out 0.5s;
  animation-fill-mode: both;
  position: relative;
  border-radius: 10px;
  box-shadow: 0 25px 45px -20px #588cd9, inset 0 0px 120px #c2cddd;
  width: 45%;
  flex: none;
  background-image: url("https://zephyo.github.io/22Days/code/3/graphics/profile.png");
  background-size: cover;
  background-position: center;
}

.profile-image::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  background-image: linear-gradient(#274768, #3973b4e3);
    
  
}



.profile-info {
  margin-top: 120px;
  padding: 8% 8% 2% 8%;
  position: relative;
}

.profile-info h1 {
  font-size: 3rem;
  font-weight: 800;
  margin: 0.7rem;
  position: absolute;
  animation-fill-mode: both;
}

h1.first-name {
  animation: titleEffect 1s cubic-bezier(0,0.2,0.4,1);
  top: -115px;
  left: -85px;
  color:#000;
} 

h1.second-name {
  animation: titleEffect 1s cubic-bezier(0,0,0.3,1);
  top: -50px;
  left: -45px;
  color:#000;
}

.profile-info h2 {
  font-size: 1rem;
  font-weight: 600;
  letter-spacing: 0.2rem;
  margin-top: 0;
  margin-bottom: 5%;
  color:#000;
}

.social-media-icons a,
.profile-info h2 {
  color: #f63d47;
}

.profile-info p {
  line-height: 1.5rem;
}

.social-media-icons {
  display: flex;
}

.social-media-icons a {
  margin-top: 7%;
  font-size: 1.2rem;
  flex: auto;
  text-align: center;
}

.camera,
.social-media-icons a {
  transition: text-shadow 0.5s ease;
}

.camera:hover,
.social-media-icons a:hover {
  text-shadow: 0px 5px 15px rgba(255, 0, 47, 0.45);
}

.statistics {
  margin-right: 10px;
  margin-left: 10px;
  line-height: 2rem;
  display: flex;
  flex-direction: row;
  align-items: center;
}

.statistics p {
  margin: 3%;
  flex: auto;
  color: #f63d47;
}

.statistics p strong {
  font-size: 1.4rem;
  color: #000;
  font-weight: 200;
  margin-right: 0.3rem;
}

.icon {
  background: transparent no-repeat center;
  background-size: contain;
  background-origin: content-box;
  width: 60px;
  height: 60px;
  padding: 15px;
  border: none;
  transition: transform 0.5s ease;
}

.icon:hover {
  transform: scale(0.9);
}

.arrow {
  flex: 0 1 75px;
  background-image: url("https://zephyo.github.io/22Days/code/3/graphics/arrow.svg");
}

.right {
  transform: rotate(180deg);
}

.right:hover {
  transform: scale(0.9) rotate(180deg);
}



@media only screen and (max-aspect-ratio: 4/7) and (max-width: 600px) {
  .profile {
    margin: 3%;
    height: 97%;
  }
  .container {
    height: 86%;
    flex-direction: column;
  }
  .profile-image {
    height: 40%;
    width: calc(100% - 90px);
  }
  .profile-bg {
    width: 100%;
  }
  h1.first-name {
    left: 10px;
  }
  h1.second-name {
    left: 60px;
  }
}

@media screen and (min-aspect-ratio: 4/7) {
  .profile {
    margin-left: 10%;
    margin-right: 10%;
  }
}

@keyframes backgroundAnimation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

@keyframes loadProfile {
 from{
    transform: translateY(100px);
    opacity: 0;
  }
 to {
     transform: translateY(0px);
    opacity: 1;
  }
}

@keyframes loadProfileImage {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
 to {
     transform: translateY(0px);
    opacity: 1;
  }
}

@keyframes titleEffect {
 from {
   opacity:0;
     transform: translateX(-75px);
  }
  to {
     transform: translateX(0px);
    opacity: 1;
  }
}

</style>