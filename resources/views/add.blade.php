<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Application test - ajout d'un voyage</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Tableau de bord</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">+ Ajouter un Voyage</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <h2>Création d'un voyage</h2>
      <div class="row">
        <main role="main" class="col-md-12 col-lg-12 pt-3 px-4">
          <form id="form">
            @csrf
            <div class="form-group row">
              <label class="col-4 col-form-label" for="text">Nom du voyage</label> 
              <div class="col-8">
                <input id="text" name="text" type="text" required="required" class="form-control">
              </div>
            </div> 
            <div id="steps-group">
              <div class="card">
                <div class="card-header">
                  Etape 1
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="type1" class="col-4 col-form-label">Type de transport</label> 
                    <div class="col-8">
                      <select id="type1" name="type1" required="required" class="custom-select">
                        <option value="plane">Avion</option>
                        <option value="bus">Bus</option>
                        <option value="train">Train</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="transport_number1" class="col-4 col-form-label">Numéro de transport</label> 
                    <div class="col-8">
                      <input id="transport_number1" name="transport_number1" type="text" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="departure_date1" class="col-4 col-form-label">Date de départ</label> 
                    <div class="col-8">
                      <input id="departure_date1" name="departure_date1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="departure1" class="col-4 col-form-label">Lieu de départ</label> 
                    <div class="col-8">
                      <input id="departure1" name="departure1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="arrival_date1" class="col-4 col-form-label">Date d'arrivée</label> 
                    <div class="col-8">
                      <input id="arrival_date1" name="arrival_date1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="arrival1" class="col-4 col-form-label">Lieu d'arrivée</label> 
                    <div class="col-8">
                      <input id="arrival1" name="arrival1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="seat1" class="col-4 col-form-label">Siège</label> 
                    <div class="col-8">
                      <input id="seat1" name="seat1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gate1" class="col-4 col-form-label">Porte</label> 
                    <div class="col-8">
                      <input id="gate1" name="gate1" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="baggage_drop1" class="col-4 col-form-label">Enregistrement baggages</label> 
                    <div class="col-8">
                      <input id="baggage_drop1" name="baggage_drop1" type="text" class="form-control">
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <a id="add" name="add" class="btn btn-primary">+ Ajouter une étape</a>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      idStep = 2;
      $(function(){
        $(document).on('click', '#add', function(e){
            e.preventDefault();

            groupOfSteps = $("#steps-group");

            groupOfSteps.append('<div id="card'+idStep+'" class="card"><div class="card-header">Etape '+idStep+' <a id="remove'+idStep+'" name="remove'+idStep+'" class="btn btn-danger">x Supprimer l\'étape (Vous ne pouvez supprimer que la dernière étape ajoutée)</a></div><div class="card-body"><div class="form-group row"><label for="type'+idStep+'" class="col-4 col-form-label">Type de transport</label> <div class="col-8"><select id="type'+idStep+'" name="type'+idStep+'" required="required" class="custom-select"><option value="plane">Avion</option><option value="bus">Bus</option><option value="train">Train</option></select></div></div><div class="form-group row"><label for="transport_number'+idStep+'" class="col-4 col-form-label">Numéro de transport</label> <div class="col-8"><input id="transport_number'+idStep+'" name="transport_number'+idStep+'" type="text" required="required" class="form-control"></div></div><div class="form-group row"><label for="departure_date'+idStep+'" class="col-4 col-form-label">Date de départ</label> <div class="col-8"><input id="departure_date'+idStep+'" name="departure_date'+idStep+'" type="text" class="form-control"></div></div><div class="form-group row"><label for="departure'+idStep+'" class="col-4 col-form-label">Lieu de départ</label> <div class="col-8"><input id="departure'+idStep+'" name="departure'+idStep+'" type="text" class="form-control"></div></div><div class="form-group row"><label for="arrival_date'+idStep+'" class="col-4 col-form-label">Date d\'arrivée</label> <div class="col-8"><input id="arrival_date'+idStep+'" name="arrival_date'+idStep+'" type="text" class="form-control"></div></div><div class="form-group row"><label for="arrival'+idStep+'" class="col-4 col-form-label">Lieu d\'arrivée</label> <div class="col-8"><input id="arrival'+idStep+'" name="arrival'+idStep+'" type="text" class="form-control"></div></div><div class="form-group row"><label for="seat'+idStep+'" class="col-4 col-form-label">Siège</label><div class="col-8"><input id="seat'+idStep+'" name="seat'+idStep+'" type="text" class="form-control"></div></div><div class="form-group row"><label for="gate'+idStep+'" class="col-4 col-form-label">Porte</label> <div class="col-8"><input id="gate'+idStep+'" name="gate'+idStep+'" type="text" class="form-control"></div></div><div class="form-group row"><label for="baggage_drop'+idStep+'" class="col-4 col-form-label">Enregistrement baggages</label> <div class="col-8"><input id="baggage_drop'+idStep+'" name="baggage_drop'+idStep+'" type="text" class="form-control"></div></div> </div></div>');

            idStep++;
        });

        $(document).on('click', '.btn-danger', function(e){
            e.preventDefault();
            if((idStep - 1) == parseInt(e.target.id.slice(-1), 10)){
              $("#card"+(idStep - 1)).remove();
              idStep--;
            }
        });
      });
    </script>
  </body>
</html>
