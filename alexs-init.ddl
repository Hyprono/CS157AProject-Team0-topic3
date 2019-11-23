CREATE TABLE patient (
    thc VARCHAR(6) NOT NULL
);

ALTER TABLE patient ADD CONSTRAINT patient_pk PRIMARY KEY ( thc );

CREATE TABLE tfi (
    total              SMALLINT,
    intrusive          SMALLINT,
    sense_of_control   SMALLINT,
    cogntive          SMALLINT,
    sleep              SMALLINT,
    auditory           SMALLINT,
    relaxation         SMALLINT,
    quality_of_life    SMALLINT,
    emotional          SMALLINT,
    q_1                SMALLINT,
    q_2                SMALLINT,
    q_3                SMALLINT,
    q_4                SMALLINT,
    q_5                SMALLINT,
    q_6                SMALLINT,
    q_7                SMALLINT,
    q_8                SMALLINT,
    q_9                SMALLINT,
    q_10               SMALLINT,
    q_11               SMALLINT,
    q_12               SMALLINT,
    q_13               SMALLINT,
    q_14               SMALLINT,
    q_15               SMALLINT,
    q_16               SMALLINT,
    q_17               SMALLINT,
    q_18               SMALLINT,
    q_19               SMALLINT,
    q_20               SMALLINT,
    q_21               SMALLINT,
    q_22               SMALLINT,
    q_23               SMALLINT,
    q_24               SMALLINT,
    q_25               SMALLINT,
    visit_visit_id     INTEGER NOT NULL
);

CREATE UNIQUE INDEX tfi__idx ON
    tfi (
        visit_visit_id
    ASC );

CREATE TABLE thi (
    sc_t             SMALLINT,
    sc_f             SMALLINT,
    sc_e             SMALLINT,
    sc_c             SMALLINT,
    q_1              SMALLINT,
    q_2              SMALLINT,
    q_3              SMALLINT,
    q_4              SMALLINT,
    q_5              SMALLINT,
    q_6              SMALLINT,
    q_7              SMALLINT,
    q_8              SMALLINT,
    q_9              SMALLINT,
    q_10             SMALLINT,
    q_11             SMALLINT,
    q_12             SMALLINT,
    q_13             SMALLINT,
    q_14             SMALLINT,
    q_15             SMALLINT,
    q_16             SMALLINT,
    q_17             SMALLINT,
    q_18             SMALLINT,
    q_19             SMALLINT,
    q_20             SMALLINT,
    q_21             SMALLINT,
    q_22             SMALLINT,
    q_23             SMALLINT,
    q_24             SMALLINT,
    q_25             SMALLINT,
	visit_visit_id     INTEGER NOT NULL
);

CREATE UNIQUE INDEX thi__idx ON
    thi (
        visit_visit_id
    ASC );

CREATE TABLE visit

(
    visit_id   INTEGER NOT NULL,
    visit_nr   SMALLINT NOT NULL,
    Date     DATE,
    comments   VARCHAR(500),
    patient_thc VARCHAR( 6 ) NOT NULL ) 
;

ALTER TABLE visit ADD CONSTRAINT visit_pk PRIMARY KEY ( visit_id );
ALTER TABLE visit MODIFY COLUMN visit_id INT auto_increment;


ALTER TABLE tfi
    ADD CONSTRAINT tfi_visit_fk FOREIGN KEY ( visit_visit_id )
        REFERENCES visit ( visit_id );

ALTER TABLE thi
    ADD CONSTRAINT thi_visit_fk FOREIGN KEY ( visit_visit_id )
        REFERENCES visit ( visit_id );

ALTER TABLE visit
    ADD CONSTRAINT visit_patient_fk FOREIGN KEY ( patient_thc )
        REFERENCES patient ( thc );
        
