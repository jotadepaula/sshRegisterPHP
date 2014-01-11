sshRegisterPHP
==============

Sistema de Upload de chaves SSH semelhante ao do GitHub para usar em repositórios locais que usam o Git internamente.

Pré-Requisitos:

    ==> Ter um servidor linux instalado e configurado corretamente
    ==> Ter um usuário chamado git
    ==> Ter o diretório .ssh e o arquivo authorized_keys no servidor
    ==> O usuário git DEVE SER DONO do arquivo authorized_keys
    ==> O usuário que for registrar a chave publica no servidor, deve estar      com a chave gerada em mãos.
   Dúvidas de como gerar a chave acesse : https://help.github.com/articles/generating-ssh-keys
