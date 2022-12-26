DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS users_id_seq;
CREATE SEQUENCE users_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."users" (
  "id" integer DEFAULT nextval('users_id_seq') NOT NULL,
  "first_name" character varying(50) NOT NULL,
  "last_name" character varying(50) NOT NULL,
  "email" character varying(100) NOT NULL,
  "phone" character varying(15),
  CONSTRAINT "users_pkey" PRIMARY KEY ("id")
                          
) WITH (oids = false);

TRUNCATE "users";
