download postgresql for windows from: https://www.enterprisedb.com/postgresql-959-binaries-win32?ls=Crossover&type=Crossover
initialize the server: initdb C:/servers/pgsql/data
start the server:   pg_ctl -D "C:/servers/pgsql/data" -l logfile start
create the database: createdb doctrinedb
create the user:    createuser --interactive -l -P -s -d useradm
connect to database: psql -d doctrinedb -U postgres
you can create the user after connected: create user useradm WITH PASSWORD '123';
grant all permissions to useradm on doctrinedb: GRANT ALL PRIVILEGES ON DATABASE doctrinedb to useradm;
you can grant all privileges to useradm on all tables: GRANT SELECT, INSERT, UPDATE, DELETE ON ALL TABLES IN SCHEMA public TO useradm;
and privileges on sequences: GRANT ALL PRIVILEGES ON ALL sequences IN SCHEMA public TO useradm;

drop table product;
drop table category;

create table category (
id serial primary key,
name varchar(30) not null
);

create table product (
id serial primary key,
name varchar(30) not null,
categoryId int references category(id)
);

insert into category (name) values ('computers');
insert into category (name) values ('cellphones');
insert into category (name) values ('monitors');

insert into product (name,categoryId) values ('laptop', 1);
insert into product (name,categoryId) values ('iphone', 2);
insert into product (name,categoryId) values ('dellpc', 1);
insert into product (name,categoryId) values ('flatron lg', 3);
insert into product (name,categoryId) values ('samsung wide', 3);
insert into product (name,categoryId) values ('philips fullhd', 3);

GRANT ALL PRIVILEGES ON DATABASE doctrinedb to useradm;
GRANT SELECT, INSERT, UPDATE, DELETE ON ALL TABLES IN SCHEMA public TO useradm;
GRANT ALL PRIVILEGES ON ALL sequences IN SCHEMA public TO useradm;


--Type \q to quit:\q
--test useradm user login: psql -d doctrinedb -U useradm

select * from product;



https://github.com/ricardobrusch/tutorialDoctrine
http://blog.ricardobrusch.com.br/doctrine-2-trabalhando-com-entidades-mapeadas/
http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/transactions-and-concurrency.html
http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html