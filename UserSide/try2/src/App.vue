<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Launment</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
    <Header></Header>

  <!-- Services -->
    <Services></Services>

    <CekLaundry></CekLaundry>
    <CekDeposit></CekDeposit>


  <!-- Portfolio Grid -->
    <!-- <Portofolio></Portofolio> -->

  <!-- About -->
    <About></About>

  <!-- Team -->
    <!-- <Team></Team> -->

  <!-- Clients -->
    <!-- <Clients></Clients> -->

  <!-- Contact -->
    <Contact></Contact>

  <!-- Footer -->
    <Footer></Footer>

  <!-- Portfolio Modals -->
  <!-- <PModal></PModal> -->
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
  import Header from './components/layout/Header.vue'
  import Services from './components/layout/Services.vue'
  import CekLaundry from './components/layout/CekLaundry.vue'
  import CekDeposit from './components/layout/CekDeposit.vue'
  // import Portofolio from './components/layout/Portofolio.vue'
  // import PModal from './components/layout/PModal.vue'
  import About from './components/layout/About.vue'
  // import Team from './components/layout/Team.vue'
  // import Clients from './components/layout/Clients.vue'
  import Contact from './components/layout/Contact.vue'
  import Footer from './components/layout/Footer.vue'

export default {
  name: 'app',
  components:{
    Header,Services,About,Footer,Contact,CekLaundry,CekDeposit, 
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}
</style>
