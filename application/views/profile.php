<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<header>

<style>

.contaner{
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.portada{
  /*  clip-path: circle(50% at center);*/
  clip-path: polygon(0 0, 100% 0, 100% 50%, 0 50%);
  display: block;
  float: left; 
  z-index: -1;
 
}


header {
    position: relative;
  }
  
  .cover-photo {
    height: 300px;
    overflow: hidden;
  }
  
  .cover-photo img {
    width: 100%;
    height: auto;
    
  }
  
  .profile-photo {
    position: absolute;
    bottom: -50px;
    left: 50px;
    border-radius: 50%;
    border: 5px solid #fff;
    overflow: hidden;
    width: 150px;
    height: 150px;
    margin-left: 70px;
       
  }
  
  .profile-photo img {
    width: 119%;
    height: auto;
   
  }
  
  section {
    padding: 20px;

  }

.aboutMe{
  border: 1px solid black;
  border-radius: 10px;
  margin-left: 10px;
}

.courses {
  display: flex
}

.percent{

  border: 1px solid rgb(2, 243, 159);
  border-radius: 30px;
  background-color:rgb(11, 247, 164)
}


.profile-photo-container {
  position: relative;

}

.profile-photo-circle {
  position: absolute;
  top: 103px;
  left: 99px;
  display: flex;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 1px solid white;
  background-color: transparent;
  z-index: 1;
  flex-direction: column-reverse;
  justify-content: center;
  align-items: center;
}

.profile-photo-circle:hover{
  background: rgb(192, 189, 189);
}
</style>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./c_login">Inicia session</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./c_register">Registrate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Deiby Graciano
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="./c_config">Configuracion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Salir</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <div class="cover-photo">
      <img
        src="https://concepto.de/wp-content/uploads/2014/08/programacion-2-e1551291144973.jpg"
        alt="Foto de portada"
      />
    </div>
    <div class="profile-photo">
      <div>
        <label htmlFor="fileInput" onClick={handleLabelClick}>
          <img
            src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdgFehTn2sFENOrIlZzLirfDT51RkJxrHVFXjmxu0&s'
            alt="Archivo seleccionado"
      
          /> <div class="profile-photo-circle" >+</div>
        </label>
       
        <input
          type="file"
          id="fileInput"
          style=' display: "none" '
        />
      </div>
    </div>
  </header>
    <section>
      <div class='container pt-5'>
      <h1 class='text-center text-success' >Deiby Graciano</h1>
      <p class='text-center'>Deibygj@hotmail.com</p>
      </div>
    </section>

    
    <section>
      <div>
        <div>
          <div class='text-center pt-4'>
           <div class='aboutMe'>
            <h5 >Cursos en los que está inscrito &nbsp; &nbsp; </h5>
            <div class='p-4'>
              <div>
                <div> 
                <div class='courses'>
                  <div>
                     <div class='aboutMe'>
                  <h5 class='text-success'>Javascript</h5>
                  <label class='pb-2'>Avance en el curso</label>
                  <div  class='percent' style='width:50% '>50%</div>
                </div>
                  </div>
               <div>
                     <div class='aboutMe'>
                    <h5  class='text-success'>SQL</h5>
                    <label class='pb-2'>Avance en el curso</label>
                    <div class='percent'  style='width:50% '>50%</div>
                  </div>

               </div>
               
                </div>
                </div>
              </div>
                
            </div>
         
               
           </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>