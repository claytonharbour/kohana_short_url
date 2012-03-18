create sequence seq_urls;

CREATE TABLE urls (
    id integer DEFAULT nextval('seq_urls'),
    url   varchar(1024) NOT NULL CHECK (url <> ''),
	urlhash varchar(40) NOT NULL CHECK (urlhash <> '')
);

alter table urls add constraint pk_urls primary key (id);