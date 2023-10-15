#!/usr/bin/bash
psql -Uphu -ddb_mahatech -hsnap.mahatech.local <<sql
drop table tbl_mainnav;
CREATE TABLE IF NOT EXISTS tbl_mainnav
(
    -- fld_subid integer NOT NULL GENERATED ALWAYS AS IDENTITY ( CYCLE INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 10 CACHE 1 ),
    fld_subid integer,
    fld_subcode varchar(64) COLLATE pg_catalog."default" NOT NULL,
    fld_subname varchar(64) COLLATE pg_catalog."default" NOT NULL,
    fld_subicon varchar(32) COLLATE pg_catalog."default",
    CONSTRAINT mainnav_tbl_pkey PRIMARY KEY (fld_subid)
);
\copy tbl_mainnav from './nav_menu.csv' WITH DELIMITER '|' CSV HEADER;
drop table tbl_nav;
CREATE TABLE IF NOT EXISTS tbl_nav
(
    -- fld_id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( CYCLE INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 100 CACHE 1 ),
    fld_id integer,
    fld_pcode varchar(16) COLLATE pg_catalog."default" NOT NULL,
    fld_pname varchar(64) COLLATE pg_catalog."default" NOT NULL,
    fld_subcode varchar(16) COLLATE pg_catalog."default",
    fld_order integer NOT NULL DEFAULT 1,
    fld_visit boolean NOT NULL DEFAULT true,
    fld_page varchar(64) COLLATE pg_catalog."default",
    fld_icon varchar(24) COLLATE pg_catalog."default",
    fld_type integer NOT NULL DEFAULT 1,
    CONSTRAINT nav_tbl_pkey PRIMARY KEY (fld_id)
);
\copy tbl_nav from './main_menu.csv' WITH DELIMITER '|' CSV HEADER;
sql
