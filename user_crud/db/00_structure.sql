CREATE TABLE users
(
    id serial NOT NULL,
    ci character varying(15) NOT NULL,
    name character varying(60) NOT NULL,
    last_name character varying(60) NOT NULL,
    birthday date NOT NULL,
    birthplace  character varying(60) NOT NULL,
    PRIMARY KEY (id)
);
