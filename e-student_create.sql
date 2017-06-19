-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-06-19 11:03:51.612

-- tables
-- Table: academic
CREATE TABLE academic (
    ac_id int NOT NULL AUTO_INCREMENT,
    ac_name int NOT NULL,
    ac_describe int NOT NULL,
    CONSTRAINT academic_pk PRIMARY KEY (ac_id)
);

-- Table: contract
CREATE TABLE contract (
    c_id int NOT NULL AUTO_INCREMENT,
    worker_w_id int NOT NULL,
    position_p_id int NOT NULL,
    c_from date NOT NULL,
    c_till date NULL,
    CONSTRAINT contract_pk PRIMARY KEY (c_id)
);

-- Table: exam
CREATE TABLE exam (
    e_id int NOT NULL AUTO_INCREMENT,
    student_st_id int NOT NULL,
    subject_s_id int NOT NULL,
    e_condition varchar(12) NULL,
    mark int NULL,
    CONSTRAINT exam_pk PRIMARY KEY (e_id)
);

-- Table: history_login
CREATE TABLE history_login (
    hl_id int NOT NULL AUTO_INCREMENT,
    hl_ip varchar(32) NOT NULL,
    hl_date date NOT NULL,
    hl_login varchar(64) NOT NULL,
    hl_condition varchar(6) NOT NULL,
    CONSTRAINT history_login_pk PRIMARY KEY (hl_id)
);

-- Table: position
CREATE TABLE position (
    p_id int NOT NULL AUTO_INCREMENT,
    p_name varchar(32) NOT NULL,
    p_describe varchar(128) NOT NULL,
    CONSTRAINT position_pk PRIMARY KEY (p_id)
);

-- Table: student
CREATE TABLE student (
    st_id int NOT NULL AUTO_INCREMENT,
    st_login varchar(64) NOT NULL,
    st_password varchar(128) NOT NULL,
    st_name varchar(32) NOT NULL,
    st_sec_name varchar(32) NULL,
    st_surname varchar(32) NOT NULL,
    st_pesel varchar(11) NOT NULL,
    st_birth_date date NOT NULL,
    st_photo varchar(128) NOT NULL,
    st_indeks int NOT NULL,
    st_start_date date NOT NULL,
    st_email varchar(64) NOT NULL,
    st_role char(1) NOT NULL,
    study_way_sw_id int NOT NULL,
    CONSTRAINT id_user PRIMARY KEY (st_id)
) COMMENT 'All of app users.';

-- Table: study_way
CREATE TABLE study_way (
    sw_id int NOT NULL AUTO_INCREMENT,
    sw_name varchar(64) NOT NULL,
    sw_describe varchar(256) NOT NULL,
    speciality varchar(128) NULL,
    CONSTRAINT study_way_pk PRIMARY KEY (sw_id)
) COMMENT 'All of study directions.';

-- Table: subject
CREATE TABLE subject (
    s_id int NOT NULL AUTO_INCREMENT,
    s_name varchar(64) NOT NULL,
    s_describe varchar(256) NOT NULL,
    CONSTRAINT subject_pk PRIMARY KEY (s_id)
);

-- Table: term
CREATE TABLE term (
    t_id int NOT NULL AUTO_INCREMENT,
    study_way_sw_id int NOT NULL,
    subject_s_id int NOT NULL,
    CONSTRAINT term_pk PRIMARY KEY (t_id)
);

-- Table: worker
CREATE TABLE worker (
    w_id int NOT NULL AUTO_INCREMENT,
    w_login varchar(32) NOT NULL,
    w_password varchar(128) NOT NULL,
    w_name varchar(32) NOT NULL,
    w_sec_name varchar(32) NULL,
    w_surname varchar(32) NOT NULL,
    w_email varchar(64) NOT NULL,
    w_birth_date date NOT NULL,
    w_pesel varchar(11) NOT NULL,
    w_photo varchar(128) NULL,
    CONSTRAINT worker_pk PRIMARY KEY (w_id)
);

-- foreign keys
-- Reference: exam_subject (table: exam)
ALTER TABLE exam ADD CONSTRAINT exam_subject FOREIGN KEY exam_subject (subject_s_id)
    REFERENCES subject (s_id);

-- Reference: exam_user (table: exam)
ALTER TABLE exam ADD CONSTRAINT exam_user FOREIGN KEY exam_user (student_st_id)
    REFERENCES student (st_id);

-- Reference: student_study_way (table: student)
ALTER TABLE student ADD CONSTRAINT student_study_way FOREIGN KEY student_study_way (study_way_sw_id)
    REFERENCES study_way (sw_id);

-- Reference: studywayhassubjects_study_way (table: term)
ALTER TABLE term ADD CONSTRAINT studywayhassubjects_study_way FOREIGN KEY studywayhassubjects_study_way (study_way_sw_id)
    REFERENCES study_way (sw_id);

-- Reference: studywayhassubjects_subject (table: term)
ALTER TABLE term ADD CONSTRAINT studywayhassubjects_subject FOREIGN KEY studywayhassubjects_subject (subject_s_id)
    REFERENCES subject (s_id);

-- Reference: workerhasposition_position (table: contract)
ALTER TABLE contract ADD CONSTRAINT workerhasposition_position FOREIGN KEY workerhasposition_position (position_p_id)
    REFERENCES position (p_id);

-- Reference: workerhasposition_worker (table: contract)
ALTER TABLE contract ADD CONSTRAINT workerhasposition_worker FOREIGN KEY workerhasposition_worker (worker_w_id)
    REFERENCES worker (w_id);

-- End of file.

