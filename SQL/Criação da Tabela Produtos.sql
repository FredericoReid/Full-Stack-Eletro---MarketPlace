use fseletro;

create table produtos(
	id int auto_increment,
	categoria varchar(100),
	descricao varchar(500),
	preco float,
	preco_venda float,
	imagem varchar(100),
	primary key(id)
);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("geladeira", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.03%20(2).jpeg", "Geladeira Brastemp", 899.00, 899.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("geladeira", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.03.jpeg", "Geladeira tres portas", 1500.00, 1500.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("geladeira", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.04%20(1).jpeg", "Geladeira Dodge", 999.00, 999.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("fogao", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.02%20(1).jpeg", "Fogão 4 bocas", 679.80, 679.80);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("fogao", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.02.jpeg", "Fogao ATLAS", 599.90, 599.90);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("microondas", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.02%20(2).jpeg", "Geladeira Dodge", 299.99, 299.99);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("microondas", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.04%20(3).jpeg", "Microondas Eletrolux", 490.00, 490.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("microondas", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.06.jpeg", "Microondas Philco", 1500.00, 1500.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("maquina de lavar", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.04%20(2).jpeg", "Maquina de lavar", 899.90, 899.90);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("maquina de lavar", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.05.jpeg", "Maquina de lavar Philco", 699.99, 699.99);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("lava loucas", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.04.jpeg", "Lavadora de Pratos", 599.90, 599.90);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("lava loucas", "imagens/WhatsApp%20Image%202020-09-24%20at%2018.08.05%20(1).jpeg", "Lavadora de Pratos Elec.", 599.90, 599.90);




















