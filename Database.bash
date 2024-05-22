#!/bin/bash
mkdir Semesters
cd ./Semesters
# Fonction pour générer un nom de fichier aléatoire
generate_filename() {
    cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 10 | head -n 1
}

# Création des dossiers semestres de 1 à 6
for semestre in {1..6}; do
    semestre_dir="Semestre_$semestre"
    mkdir -p "$semestre_dir"
    
    # Création des dossiers matières
    for matiere in "Algorithme" "Réseaux" "Base_de_données" "Systèmes_d'exploitation" "Programmation_web" "Intelligence_artificielle" "Sécurité_informatique" "Architecture_des_ordinateurs" "Développement_mobile" "Cloud_computing"; do
        matiere_dir="$semestre_dir/$matiere"
        mkdir -p "$matiere_dir"
        
        # Création des dossiers cours, td, ressources
        for dossier in "cours" "td" "ressources"; do
            dossier_dir="$matiere_dir/$dossier"
            mkdir -p "$dossier_dir"
            
            # Création des fichiers
            for ((i=1; i<=10; i++)); do
                filename=$(generate_filename)
                if ((i % 2 == 0)); then
                    # Création de fichiers PDF
                    touch "$dossier_dir/$filename.pdf"
                else
                    # Création de fichiers compressés
                    touch "$dossier_dir/$filename.zip"
                fi
            done
        done
    done
done

echo "La structure de dossiers et fichiers a été créée avec succès."
