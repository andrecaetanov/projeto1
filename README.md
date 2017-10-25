Code Empresa Junior
Processo Trainee - Projeto 1

GIT TUTORIAL

1- Entre na pasta onde irá guardar o projeto:
    cd /caminho/para/a/pasta

2- Inicialize o git na pasta:
	git init

2- Crie um clone do repositório:
	git clone https://github.com/andrecaetanov/projeto1.git

3- Entre na pasta criada pelo comando clone:
	cd /caminho/para/a/pasta/nova

4- Crie sua branch usando como o padrão seu primeiro nome começando com letra minúscula:
	git checkout -b primeironome

5- Adicione as alterações feitas:
	git add *

6- Cheque em qual branch está e quais alterações foram adicionadas:
	git status

7- Dê um commit com uma mensagem especificando as alterações realizadas:
	git commit -m "mensagem especificando o que foi feito"

8- Envie o commit feito para sua branch:
	git push origin suabranch

9- Volte para a master:
	git checkout master

10- Mescle a master com as alterações enviadas para sua branch (apenas quando solicitado pelo SM):
	git merge suabranch

11- Confirme o merge (apenas quando solicitado pelo SM):
	git push origin master

12- Para atualizar a master:
	git pull

13- Para atualizar alguma branch:
	git pull origin branch

14- Para mesclar sua branch com a master (estando dentro da sua branch):
	git merge master

15- Para confirmar o merge:
	git push origin suabranch
