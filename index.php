<?php include './header.php'; ?>

<?php
  class Pokemon {
    public $nome; // Atributo | Propriedade
    public $poder;
    public $foto;
  }

  $pokemon1 = new Pokemon(); // criando instancia
  $pokemon1->nome = 'Pikachu';
  $pokemon1->poder = 'Poder Eletrizante';
  $pokemon1->foto = 'https://img.pokemondb.net/artwork/large/pikachu.jpg';

  $pokemon2 = new Pokemon();
  $pokemon2->nome = 'Charizard';
  $pokemon2->poder = 'Poder de Fogo Ardente';
  $pokemon2->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png';

  $pokemon3 = new Pokemon();
  $pokemon3->nome = 'Blastoide';
  $pokemon3->poder = 'power Magic';
  $pokemon3->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/009.png';

  $pokemon4 = new Pokemon();
  $pokemon4->nome = 'Pidgeotto';
  $pokemon4->poder = 'Keen eye';
  $pokemon4->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/017.png';
  
  $pokemon5 = new Pokemon();
  $pokemon5->nome = 'Vulpix';
  $pokemon5->poder = 'poder da raposa';
  $pokemon5->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/037.png';
  
  $pokemon6 = new Pokemon();
  $pokemon6->nome = 'Arcanine';
  $pokemon6->poder = 'fire';
  $pokemon6->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/059.png';
  
  $pokemon7 = new Pokemon();
  $pokemon7->nome = 'Alakazam';
  $pokemon7->poder = 'poder hipnotico';
  $pokemon7->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/065.png';

  $pokemon8 = new Pokemon();
  $pokemon8->nome = 'Raticate';
  $pokemon8->poder = 'poder do ratão';
  $pokemon8->foto = 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/020.png';

  $pokemons  = [
    $pokemon1,
    $pokemon2,
    $pokemon3,
    $pokemon4,
    $pokemon5, 
    $pokemon6,
    $pokemon7,
    $pokemon8
  ];
?>

    <div class="container">
      <div class="row">
        <?php
        //echo "<pre>"; Melhor Vizualização
          foreach ($pokemons as $index => $pokemon) {?>
            <!-- pikachu -->
            <div class="col-12 col-lg-3 p-3">
              <div class="card" style="width: 18rem;">
                <img src="<?php echo $pokemon->foto ? $pokemon->foto : 'https://www.compulaserg.com.br/comvisual/img/fotos/semimagem.jpg';?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $pokemon->nome;?></h5>
                  <p class="card-text"><?php echo $pokemon->poder;?></p>
                  <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
              </div>
            </div>
        <?php }?>
        
      </div>
    </div>

    <?php include './footer.php'; ?>