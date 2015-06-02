    <?php
    // Classe pour acc�der �la table news
    class articleDAO extends DAO
    {

        public function getOne($key)
        {
            $stmt = $this->pdo->prepare("SELECT * FROM article WHERE article.id_article=?");
            $stmt->execute(array(
                $key
            ));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return new articleDAO($row);
        }
        
        // R�cup�ration de toute les donn�es
        public function getAll()
        {
            $res = array();
            $stmt = $this->pdo->query("SELECT * FROM article ORDER BY date_article DESC");
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
                $res[] = new articleDAO($row);
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
            $stmt = $this->pdo->prepare("UPDATE article SET  libelle_article=:libelle_article, date_article=:date_article, contenu_article=:contenu_article WHERE id_article=:id_article");
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
    }
    
    ?>