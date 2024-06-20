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
   id_�����             int  comment '',
   opisanie_voprosa     text not null  comment '',
   primary key (id_test)
);

/*==============================================================*/
/* Table: prohodyt                                              */
/*==============================================================*/
create table prohodyt
(
   id_�����             int not null  comment '',
   kluch_polzovateli    int not null  comment '',
   primary key (id_�����, kluch_polzovateli)
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
/* Table: ������������                                          */
/*==============================================================*/
create table ������������
(
   kluch_polzovateli    int not null  comment '',
   Kluch_roli           int not null  comment '',
   "����� ��������"     numeric(11,0) not null  comment '',
   ����                 longblob  comment '',
   Name                 text not null  comment '',
   Porol_polzovately    longtext not null  comment '',
   primary key (kluch_polzovateli)
);

/*==============================================================*/
/* Table: ����                                                  */
/*==============================================================*/
create table ����
(
   "�������� ����"      text not null  comment '',
   Kluch_roli           int not null  comment '',
   primary key (Kluch_roli)
);

/*==============================================================*/
/* Table: ����                                                  */
/*==============================================================*/
create table ����
(
   id_�����             int not null  comment '',
   ����                 text not null  comment '',
   ������               text not null  comment '',
   �������              text  comment '',
   "������� ������� �����" text  comment '',
   �����                text not null  comment '',
   primary key (id_�����)
);

alter table Vopros add constraint FK_VOPROS_POVERYETS_���� foreign key (id_�����)
      references ���� (id_�����) on delete restrict on update restrict;

alter table prohodyt add constraint FK_PROHODYT_PROHODYT_���� foreign key (id_�����)
      references ���� (id_�����) on delete restrict on update restrict;

alter table prohodyt add constraint FK_PROHODYT_PROHODYT2_�������� foreign key (kluch_polzovateli)
      references ������������ (kluch_polzovateli) on delete restrict on update restrict;

alter table variant_otvetov add constraint FK_VARIANT__VKLUCHAET_VOPROS foreign key (id_test)
      references Vopros (id_test) on delete restrict on update restrict;

alter table ������������ add constraint FK_��������_EST_���� foreign key (Kluch_roli)
      references ���� (Kluch_roli) on delete restrict on update restrict;

