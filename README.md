Qual tabela deve receber a Foreign Key?

A tabela albums deve receber a chave estrangeira (artist_id), pois o relacionamento é de 1:N. 
Um artista pode possuir vários álbuns, mas cada álbum pertence a apenas um artista. 
Dessa forma, a chave estrangeira fica na tabela que representa o lado "muitos" do relacionamento.
