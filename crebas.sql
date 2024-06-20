/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     24.04.2023 19:14:11                          */
/*==============================================================*/



/*==============================================================*/
/* Table: Vopros                                                */
/*==============================================================*/
create table Vopros
(
   id_test              int not null  comment '',
   id_урока             int  comment '',
   opisanie_voprosa     text not null  comment '',
   primary key (id_test)
);

/*==============================================================*/
/* Table: prohodyt                                              */
/*==============================================================*/
create table prohodyt
(
   id_урока             int not null  comment '',
   kluch_polzovateli    int not null  comment '',
   primary key (id_урока, kluch_polzovateli)
);

/*==============================================================*/
/* Table: variant_otvetov                                       */
/*==============================================================*/
create table variant_otvetov
(
   id_otveta            int not null  comment '',
   id_test              int not null  comment '',
   vopros               text not null  comment '',
   correct_otvet        text not null  comment '',
   ball                 int  comment '',
   primary key (id_otveta)
);

/*==============================================================*/
/* Table: Пользователь                                          */
/*==============================================================*/
create table Пользователь
(
   kluch_polzovateli    int not null  comment '',
   Kluch_roli           int not null  comment '',
   "Номер телефона"     numeric(11,0) not null  comment '',
   Фото                 longblob  comment '',
   Name                 text not null  comment '',
   Porol_polzovately    longtext not null  comment '',
   primary key (kluch_polzovateli)
);

/*==============================================================*/
/* Table: Роль                                                  */
/*==============================================================*/
create table Роль
(
   "Название роли"      text not null  comment '',
   Kluch_roli           int not null  comment '',
   primary key (Kluch_roli)
);

/*==============================================================*/
/* Table: Урок                                                  */
/*==============================================================*/
create table Урок
(
   id_урока             int not null  comment '',
   тема                 text not null  comment '',
   теория               text not null  comment '',
   формула              text  comment '',
   "примеры решения задач" text  comment '',
   видео                text not null  comment '',
   primary key (id_урока)
);

alter table Vopros add constraint FK_VOPROS_POVERYETS_УРОК foreign key (id_урока)
      references Урок (id_урока) on delete restrict on update restrict;

alter table prohodyt add constraint FK_PROHODYT_PROHODYT_УРОК foreign key (id_урока)
      references Урок (id_урока) on delete restrict on update restrict;

alter table prohodyt add constraint FK_PROHODYT_PROHODYT2_ПОЛЬЗОВА foreign key (kluch_polzovateli)
      references Пользователь (kluch_polzovateli) on delete restrict on update restrict;

alter table variant_otvetov add constraint FK_VARIANT__VKLUCHAET_VOPROS foreign key (id_test)
      references Vopros (id_test) on delete restrict on update restrict;

alter table Пользователь add constraint FK_ПОЛЬЗОВА_EST_РОЛЬ foreign key (Kluch_roli)
      references Роль (Kluch_roli) on delete restrict on update restrict;

