<br>

  <h4 class="level-1 rectangle">Programme de Développement Agricole sur l'Axe <span>Meski-Boudnib</span></h4>
  <ol class="level-2-wrapper">
    <li>
      <h2 class="level-2 rectangle">Contrat de nappe</h2></li>
    <li>
      <h2 class="level-2 rectangle">PDIAAI-CC</h2>
    </li>
  </ol>
  <h2> Organisation Institutionnelle</h2>
  <hr>
  <br>
  <div class="graphic-container">
  
  <div class="center-circles-container">
    
<!--  single    -->
    <div class="single">
      <div class="circle one">
        <div class="dot"></div>
        <div class="icon">
          <i class="far fa-building">1</i>
        </div>
        <div class="content-container">
          <div class="line"></div>
          <div class="content">
            <h3>DAR</h3>
          </div>
        </div>
      </div>
    </div>
<!--   double   -->
    <div class="double">
      <div class="circle two">
        <div class="icon">
          <i class="far fa-building">2</i>
        </div>
        <div class="content-container">
          <div class="line"></div>
          <div class="content">
            <h3>ABH GZR</h3>
          </div>
        </div>
        </div>
      <div class="circle three">
        <div class="icon">
          <i class="far fa-building">3</i>
        </div>
        <div class="content-container">
          <div class="line" style="height:120px"></div>
          <div class="content">
            <h3>ORMVA-T</h3>
          </div>
        </div>
        </div>
    </div>
<!--   double   -->
    <div class="double">
      <div class="circle four">
        <div class="dot"></div>
        <div class="icon">
          <i class="far fa-building">4</i>
        </div>
        <div class="content-container">
          <div class="line" style="height:120px"></div>
          <div class="content">
            <h3>ANDZOA</h3>
          </div>
        </div>
        </div>
      <div class="circle five">
        <div class="icon">
          <i class="far fa-building">5</i>
        </div>
        <div class="content-container">
          <div class="line"></div>
          <div class="content">
            <h3>Autres</h3>
          </div>
        </div>
        </div>
    </div>
<!--  single    -->
    
    
  </div>
  
</div>




<style>
/* RESET STYLES & HELPER CLASSES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --level-1: #8dccad;
  --level-2: #f5cc7f;
  --black: black;
}


ol {
  list-style: none;
}
h3 {
  text-align:center;
  color: #000;
  font-weight:10px;
}
h2 {
    font-size: 2.6rem;
    line-height: 1.25;
    color: #3f5e79;
    font-weight: 600;
    letter-spacing: 3px;
}


.rectangle {
  position: relative;
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
}


/* LEVEL-1 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.level-1 {
      width: 43%;
    margin: 0 auto 40px;
    background-image: linear-gradient(to right, #3399ff 1%, #66ffff 103%);
    color: #000;
    text-align: center;
    font-size: 15px;
    letter-spacing: 2px;
}
}

.level-1::before {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 20px;
  background: var(--black);
}


/* LEVEL-2 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.level-2-wrapper {
  position: relative;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.level-2-wrapper::before {
  content: "";
  position: absolute;
  top: -20px;
  left: 25%;
  width: 50%;
  height: 2px;
  background: var(--black);
}

.level-2-wrapper::after {
  display: none;
  content: "";
  position: absolute;
  left: -20px;
  bottom: -20px;
  width: calc(100% + 20px);
  height: 2px;
  background: var(--black);
}

.level-2-wrapper li {
  position: relative;
}

.level-2-wrapper > li::before {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 20px;
  background: var(--black);
}

.level-2 {
    width: 55%;
    margin: 0 auto 40px;
    background-image: linear-gradient(to right, #ff9933 0%, #ffcc66 100%);
    color: #000;
    text-align: center;
    font-size: 19px;
}



.level-2::after {
  display: none;
  content: "";
  position: absolute;
  top: 50%;
  left: 0%;
  transform: translate(-100%, -50%);
  width: 20px;
  height: 2px;
  background: var(--black);
}


/* LEVEL-3 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/* MQ STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 700px) {
  .rectangle {
    padding: 20px 10px;
  }

  .level-1,
  .level-2 {
    width: 100%;
  }

  .level-1 {
    margin-bottom: 20px;
  }

  .level-1::before,
  .level-2-wrapper > li::before {
    display: none;
  }
  
  .level-2-wrapper,
  .level-2-wrapper::after,
  .level-2::after {
    display: block;
  }

  .level-2-wrapper {
    width: 90%;
    margin-left: 10%;
  }

  .level-2-wrapper::before {
    left: -20px;
    width: 2px;
    height: calc(100% + 40px);
  }

  .level-2-wrapper > li:not(:first-child) {
    margin-top: 50px;
  }
}
/*------------------------------------------------------*/

:root {
  --gap: -315px;
  --circle-size: 150px;
  --circle-size-small: 130px;
  --color-1: #828f95;
  --color-2: #9da6a5;
  --color-3: #77ada7;
  --color-4: #5aafb2;
  --color-5: #39b3bb;
  --color-6: #07bec2;
}

.graphic-container {
  width: 100%;
  min-height: 55vh;
  display: grid;
  place-items: center;
  margin: 100px 0;
}
.center-circles-container {
  display: flex;
  justify-content: center;
  align-items: center;
  grid-gap: 20px;
  height: 100%;
  width: 100%;
}

.single {
  gap: 20px;
}
.double {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0px;
}
.double:nth-child(even) {
  flex-direction: column-reverse;
}
.circle {
  width: var(--circle-size);
  height: var(--circle-size);
  background: #fff;
  border-radius: 50%;
  
  display: grid;
  place-items: center;
  position: relative;
}

.icon i {
  font-size: 3rem;
}
.content-container {
  position: absolute;
  max-width: 200px;
  min-width: 200px;
  width: 100%;
}
.content p {
  font-size: 10px;
  width: 106%;
}


/* different content elements */
.two, .four {
  width: var(--circle-size-small);
  height: var(--circle-size-small);
}
.two i, .four i {
  color: #fff;
  font-size: 2.5rem;
}
.one .content-container {
    left: 23px;
    bottom: var(--gap);
    text-align: left;
    top: 285px;
}
.two .content-container {
    left: 80px;
    bottom: var(--gap);
    text-align: left;
    top: 185px;t;
}
.three .content-container {
    right: 163px;
    top: var(--gap);
    text-align: right;
    bottom: 223px;
    padding-top: 137px;
}
.four .content-container {
    right: 20px;
    top: var(--gap);
    text-align: right;
    bottom: 180px;
    padding-top: 137px;
}
.five .content-container {
    left: 140px;
    bottom: var(--gap);
    text-align: left;
    top: 228px;
}


/* lines */
/* bottom layer */
.one .line {
  position: absolute;
  width: 2px;
  height: 170px;
  background-color: var(--color-1);
  top: -150px;
  left: -30px;
}
.one .line::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 35px;
  height: 2px;
  background: var(--color-1);
}
.one .line::after, 
.two .line::after,
.five .line::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 20px;
  height: 2px;
}
.one .line::after {
  background: var(--color-1);  
}
.two .line::after {
  background: var(--color-2);
}
.five .line::after {
  background: var(--color-5);
}
.two .line {
  position: absolute;
  width: 2px;
  height: 90px;
  background-color: var(--color-2);
  top: -70px;
  left: -30px;
}
.five .line {
  position: absolute;
  width: 2px;
  height: 110px;
  background-color: var(--color-5);
  top: -90px;
  left: -30px;
}
/* top layer */
.three .line {
  position: absolute;
  width: 2px;
  height: 222px;
  background-color: var(--color-3);
  bottom: -100px;
  right: -30px;
}
.three .line::after, 
.four .line::after, 
.six .line::after {
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  width: 20px;
  height: 2px;
}
.three .line::after {
  background: var(--color-3);  
}
.four .line::after {
  background: var(--color-4);  
}
.six .line::after {
  background: var(--color-6);  
}
.four .line {
  position: absolute;
  width: 2px;
  height: 222px;
  background-color: var(--color-4);
  bottom: -100px;
  right: -30px;
}
.four .line::before {
  content: '';
  position: absolute;
  right: 0px;
  bottom: 0;
  width: 20px;
  height: 2px;
  background: var(--color-4);
}



/* dots */
.one .dot {
  position: absolute;
  top: 110px;
  right: -30px;
  width: 20px;
  height: 20px;
  background: var(--color-1);
  border-radius: 50%;
  box-shadow: -20px -110px 0 6px var(--color-1), -30px 80px 0 4px var(--color-1);
}
.four .dot {
  position: absolute;
  top: 130px;
  left: 0px;
  width: 20px;
  height: 20px;
  background: var(--color-4);
  border-radius: 50%;
  box-shadow: -22px -138px 0 10px var(--color-4), -70px 70px 0 0px var(--color-4);
}

/* circle colors */
.one {
  box-shadow: inset 0 0 0 20px var(--color-1), inset 0px 0px 12px 20px #989898;
}
.two {
  background-color: var(--color-2);
  transform: translateX(-20px);
}
.three {
  box-shadow: inset 0 0 0 20px var(--color-3), inset 0px 0px 12px 20px #989898;
  transform: translateX(10px);
}
.four {
  background-color: var(--color-4);
  transform: translateX(-20px);
}
.five {
  box-shadow: inset 0 0 0 20px var(--color-5), inset 0px 0px 12px 20px #989898;
  transform: translateX(10px);




/* media */
@media (max-width: 992px) {
  .graphic-container {
    margin: 50px 0;
  }
  .center-circles-container {
    overflow: hidden;
    overflow-x: scroll;
    width: 1300px;
  }
  .double {
    flex-direction: row;
  }
  .double:nth-child(even) {
    flex-direction: row;
  }
  .two {
    transform: translateX(0px);
  }
  .three {
    transform: translateX(0px);
  }
  .four {
    transform: translateX(0px);
  }
  .five {
    transform: translateX(0px);
  }
}

</style>