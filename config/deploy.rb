set :user, 'sshlogin' #Login ssh
set :password, "sshpassword" #Mot de passe ssh


set :scm, 'git' #Quel type de repository j'utilise. 
set :repository,  'https://github.com/Nikoms/deployme.git' #Adresse de mon repository
set :branch, 'master' #Branche à utiliser (pas obligatoire, master par défaut)
set :deploy_to, '/home/sshlogin/deploy' #Dossier où l'on va déployer les fichiers 
set :deploy_via, :copy #Comment déployer les fichiers.