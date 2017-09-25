<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="?p=accueil">Biblio'Media</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?p=accueil">Accueil</a></li>
      <li><a href="?p=livre">Livre</a></li>
      <li><a href="?p=admin">Se connecter</a></li>
    </ul>
    <form method="POST" action="?p=recherche" class="navbar-form" role="search">
        <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="Recherche" required>
            <div class="input-group-btn">
                <button  class="btn btn-default"   type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
  </div>

</nav>