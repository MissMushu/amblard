    <?php
    // Classe pour accéder à la table article
    class ArticleDAO extends DAO
    {

        /**
         * Récupère un élément via son identifiant.
         * 
         * @see DAO::getOne()
         */
        public function getOne($key)
        {
            $stmt = $this->pdo->prepare("SELECT * FROM article WHERE article.id_article=?");
            $stmt->execute(array(
                $key
            ));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return new ArticleModel($row);
        }

        /**
         * Récupérations de tous les champs de la base de données.
         * 
         * @see DAO::getAll()
         */
        public function getAll()
        {
            $res = array();
            $stmt = $this->pdo->query("SELECT * FROM article ORDER BY date_article DESC");
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
                $res[] = new ArticleModel($row);
            return $res;
        }
        
        // Ajout de l'article dans la base de donn�e
        public function insert($obj)
        {
            $stmt = $this->pdo->prepare("INSERT INTO article (libelle_article, date_article, contenu_article, id_redacteur) VALUES (:libelle_article, :date_article, :contenu_article, :id_redacteur)");
            $res = $stmt->execute($obj->getFields());
            return $res;
        }
        
        // Mise à jour de l'article
        public function update($obj)
        {
            $stmt = $this->pdo->prepare("UPDATE article SET libelle_article=:libelle_article, date_article=:date_article, contenu_article=:contenu_article, id_redacteur=:id_redacteur WHERE id_article=:id_article");
            $res = $stmt->execute($obj->getFields());
            return $res;
        }
        
        // Effacement de l'article
        public function delete($obj)
        {
            $stmt = $this->pdo->prepare("DELETE FROM article WHERE libelle_article=?");
            $res = $stmt->execute(array(
                $obj->libelle_article
            ));
            return $res;
        }

        public function recherche($motclef)
        {
            $res = array();
            $stmt = $this->pdo->prepare("SELECT * FROM article WHERE libelle_article like ?");
            $stmt->execute(array(
                $motclef
            ));
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
                $res[] = new ArticleModel($row);
            return $res;
        }

        public function redacteur()
        {
            $stmt = $this->pdo->prepare("SELECT nom_admin, prenom_admin FROM article inner join administrateur on article.id_redacteur=administrateur.id_admin where id_redacteur=?");
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
    	
        public function getNbArticle()
        {
        	$stmt = $this->pdo->query("SELECT COUNT(id_article) as nbArticles FROM article");
        	$resultat = $stmt->fetch();
        	$res = $resultat['nbArticles'];
        	return $res;
        
        }
        
        public function getAllForPagination($cPage, $parPage)
        {
        	$res = array();
        	$stmt = $this->pdo->prepare("SELECT * FROM article ORDER BY date_article DESC LIMIT :cPage, :parPage");
        	$stmt->bindValue( ":cPage", $cPage, PDO::PARAM_INT );
        	$stmt->bindValue( ":parPage", $parPage, PDO::PARAM_INT );
        	$stmt->execute();
        	foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        		$res[] = new ArticleModel($row);
        	return $res;
        }
        
    
    }
    
    
    ?>