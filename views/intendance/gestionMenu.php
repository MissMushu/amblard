	<link rel="stylesheet" type="text/css"
	href="<?php echo WEBROOT?>css/administration/style_sousmenu.css" />
<div id="categorie">
		<h5>Gérer les catégories</h5>
		<div id="arborescence">
				<h6>Arborescence du menu</h6>

<?php
MenuModel::recupMenu ();
?>

		</div>
	<h7>Ajouter un sous menu</h7>
				<div class="row">
					<form class="col s12"  > 

						<div class="row">
							<div class="input-field col s6">
								<input id="nom_menu_add" type="text" class="validate"> <label
									for="nom_menu_add">Nom du menu</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<input id="nom_menu_pere_add" type="text" class="validate"> <label
									for="nom_menu_pere_add">Nom du menu père</label> 
									<SELECT
									class="browser-default" name="nom_menu_pere" id="nom_menu_pere">
									<option value="" disabled selected>Menu père</option>
                        <?php MenuModel::getMenuForFormAdd(); ?>
                         
                        </SELECT>
							</div>
						</div>

						<br>
						<button class="btn waves-effect waves-light" type="submit"
							name="action">
							Ajouter<i class="mdi-content-send right"></i>
						</button>
					</form>
			
	
		</div>
		<div id="gestion_menu">

	
				<h7>Modifier/Supprimer un menu</h7>
					<div class="row">
						<form class="col s12"
							action="<? WEBROOT.'administration/modifyOrDelCategorie' ?>">

							<div class="row">
								<div class="input-field col s6">
									<input id="nom_menu_del" type="text" class="validate"> <label
										for="nom_menu_del">Nom du menu père</label> <SELECT
										class="browser-default" name="nom_menu_pere"
										id="nom_menu_pere">
										<option value="" disabled selected>Choisissez un menu</option>
                        <?php MenuModel::getMenuForFormAdd(); ?>
                         
                        </SELECT>
								</div>
							</div>

							<div class="row">
								<div class="input-field col s6">
									<input id="nouveau_nom_menu" type="text" class="validate"> <label
										for="nouveau_nom_menu_">Nouveau nom du menu</label>
								</div>
							</div>

							<br>
							<button class="btn waves-effect waves-light green darken-1"
								type="submit" id="Modifier" name="Modifier">
								<i class="mdi-image-edit left"></i>Modifier
							</button>

							<button
								class="btn waves-effect waves-ligh red darken-4 supprimer"
								type="submit" id="Supprimer" name="Supprimer">
								<i class="mdi-action-delete right"></i>Supprimer
							</button>
						</form>




					</div>
				</form>
	



		</div>

</div>
</div>