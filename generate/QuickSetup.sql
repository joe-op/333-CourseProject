insert into company_field (field_id,field_type,field_name) values (1,"sci","programming");

insert into company_field (field_id,field_type,field_name) values (2,"sci","Processor Manufacturing");

insert into agent(agent_id,agent_first_name,agent_last_name,agent_email,agent_phone,agent_address) values(1,"mike","montro","agentmike@mysql.com","3141589","w12345 555th st");

insert into agent(agent_id,agent_first_name,agent_last_name,agent_email,agent_phone,agent_address) values(2,"joe","montro","agentjoe@mysql.com","3141589","w39933 555th st");

insert into headquarter(headquarter_id,headquarter_city)
       values (1, "Redmond"),
	      (2,"Washington"),
       	      (3, "Hong Kong"),
	      (4, "Seoul"),
	      (5, "Dublin");
       	      
		


insert into company(company_name,company_field_id,agent_id,headquarter_id)
       values ("Microsoft", 1,1,1),
       	      ("Intel",2,2,2),
       	      ("Nvidia", 2, 3,3),
	      ("Broadcom", 1,4,4),
	      ("AMD", 2,5,5);

 
insert into stock_holder(stock_holder_id,stock_holder_first_name,stock_holder_last_name,stock_holder_address,stock_holder_email,company_id) 
	values (1,"philip","montro","w3124342 444th ave","philipeMontro@gmail.com",1),
	(2,"george","montro","w1232131 444th ave","georgeMontro@gmail.com",2);
