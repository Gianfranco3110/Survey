@extends('layouts.app')
@section ('home')
<div class="slider">
    <ul>
        <li>
            <img src="{{ asset('img/home.jpg') }}" alt="home" >
        </li>
        <li>
            <img src="{{ asset('img/survey.jpg') }}" alt="home">
        </li>
        <li>
            <img src="{{ asset('img/home.jpg') }}" alt="home">
        </li>
        <li>
            <img src="{{ asset('img/survey.jpg') }}" alt="home" class="d-flex w-100 mr-auto ml-auto">
        </li>
    </ul>
</div>

<!-- final del slider -->
<br><br><br>
    <div class="container">
        <div class="modal-body row">
            <div class="col-md-6 text-center">
                <h4> Conoce mas sobre nosotros</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero nulla, maiores consectetur dolore sunt sint harum obcaecati corrupti magnam. Non hic quidem cumque rerum, inventore in exercitationem nihil illo.</p>
            </div>
            <div class="col-md-6 text-center">
                <h4> Nuestros visitantes</h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium distinctio nulla quidem! Voluptate vero alias porro, incidunt vel odio totam neque veritatis, illum esse debitis quisquam consectetur quae maxime tenetur!</p>
            </div>

            
            <div class="col-md-6 text-center">
                <h4> Conoce mas sobre nosotros</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero nulla, maiores consectetur dolore sunt sint harum obcaecati corrupti magnam. Non hic quidem cumque rerum, inventore in exercitationem nihil illo.</p>
            </div>
            <div class="col-md-6 text-center">
                <h4> Nuestros visitantes</h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium distinctio nulla quidem! Voluptate vero alias porro, incidunt vel odio totam neque veritatis, illum esse debitis quisquam consectetur quae maxime tenetur!</p>
            </div>
        </div>    
    </div>
<br><br><br>

 <!-- final de la primera sección del home-->
<div style="background-color: #dadee2;"> 
    <div class="container">
        <div class=" modal-body row">
        <!-- Columnna que contiene la primera tarjeta-->
            <div class="col-md-4" style="background-color: #3ab8a3fb;">
                <div class="card-body">
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos optio libero laborum voluptatem maxime dolore, nisi vel suscipit ea autem fugiat ipsam eius delectus sint deleniti voluptate quae alias aperiam?</p>
                </div>
            </div>
        <!-- Columnna que contiene la segunda tarjeta-->
            <div class="col-md-4 ">
                <div class="card-body" style="background-color: #35b1733d;">
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus magni labore obcaecati nihil soluta, cum sapiente eveniet earum saepe laudantium commodi voluptas placeat eius nisi exercitationem? Pariatur ducimus ipsum ut.</p>
                </div>
            </div>

        <!-- Columnna que contiene la tercera tarjeta-->
            <div class="col-md-4">
                <div class="card-body" style="background-color: #3ab8a3fb;">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ipsam corporis itaque perferendis labore molestiae quod iusto eos deserunt qui exercitationem reprehenderit, ipsum, commodi ducimus eligendi non soluta quam quia.</p>
                </div>
            </div>
        </div> <!-- final del div modal-body row -->
    </div>    <!-- final del div container -->
</div>
@endsection


<style>
.slider {
	width: 100%;
	margin: auto;
	overflow: hidden;
    height: 600px;
}

.slider ul {
	display: flex;
	padding: 0;
	width: 400%;
    height: 600px;
	
	animation: cambio 20s infinite alternate linear;
}

.slider li {
	width: 100%;
    height: 600px;
	list-style: none;
}

.slider img {
	width: 100%;
}

@keyframes cambio {
	0% {margin-left: 0;}
	15% {margin-left: 0;}
	
	30% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	55% {margin-left: -200%;}
	65% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}
</style>
