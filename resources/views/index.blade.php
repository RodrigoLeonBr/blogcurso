@extends('blog')

@section('imagem')
    'img/home-bg.jpg'
@stop

@section('titulo')
    <div class="site-heading">
        <h1>Blog Limpo</h1>
@stop

@section('subtitulo')
    <hr class="small">
    <span class="subheading">Um Tema de Blog Limpo por "Iniciando Bootstrap"</span>
@stop

@section('conteudo')
    <?php for($i =0; $i< count($titulos); $i++) { ;?>
        <div class="post-preview">
            <a href="post">
                <h2 class="post-title">
                    <?=$titulos[$i];?>
                </h2>
                <h3 class="post-subtitle">
                    <?=$subtitulos[$i];?>
                </h3>
            </a>
            <p class="post-meta">Posted by <a href="#"><?$autores[$i];?></a> <?=$datas[$i];?></p>
        </div>
        <hr>
    <?php } ; ?>

    <!-- Pager -->
    <ul class="pager">
        <li class="next">
            <a href="#">Older Posts &rarr;</a>
        </li>
    </ul>
@stop
