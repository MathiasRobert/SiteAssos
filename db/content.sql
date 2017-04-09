insert into ASSOCIATION values
(1, "Bureau Des Eleves", "BDE", "bde@ensc.fr", "#95181a", "Le BDE gère ta vie étudiante en t'organisant des soirées de folieeeee !", null, "images/bde.jpg");
insert into ASSOCIATION values
(2, "Bureau Des Sports", "BDS", "bds@ensc.fr", "#051e1e", "Le BDS te permet de faire un peu de sport pour entretenir ton corps alcolisé !", null, "images/bds.png");

insert into EQUIPE values
(1, 1, "Sporrer", "Nicolas", "Président", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(2, 1, "Noël", "Clara", "Vice-présidente", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(3, 1, "Gautheron", "Achille", "Trésorier", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(4, 1, "Thill", "Sarah", "Secrétaire", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(5, 1, "Robert", "Mathias", "Coordinateur", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(6, 1, "Defay", "Léna", "Respo com", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(7, 1, "Bordeau", "Camille", "Respo partenariat", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(8, 1, "Sta", "Juliette", "Respo Gala", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(9, 1, "Tissier-Verse", "Laurie", "Respo événement", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(10, 1, "Triquet", "Charlotte", "Respo événement", "bla", "nsporrer@ensc.fr", "images/bde.jpg");
insert into EQUIPE values
(11, 1, "Perez", "Victor", "Respo BREI", "bla", "nsporrer@ensc.fr", "images/bde.jpg");

insert into CATEGORIE values
(1, "EVENEMENT");
insert into CATEGORIE values
(2, "VIE DE L'ECOLE");

insert into ARTICLE values
(1, 1, 1, "La nuit de ingés", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet lacus nisl, vitae aliquam leo elementum sit amet. Curabitur porttitor condimentum turpis id lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean in mauris non mi fermentum feugiat iaculis quis neque. Vivamus id malesuada ex, mollis eleifend tortor. Nam nec faucibus risus. Suspendisse dapibus nec arcu at imperdiet. Donec turpis felis, suscipit a diam a, congue tempus arcu. Fusce mattis orci sed pellentesque egestas. Maecenas eu cursus leo, sollicitudin consectetur sapien.

Suspendisse eu est nulla. Suspendisse in lectus ut arcu dignissim tincidunt sit amet quis massa. Nam condimentum magna eu maximus auctor. Proin ac justo vestibulum, suscipit nisi vel, dapibus orci. Praesent iaculis consequat lectus, facilisis malesuada ante scelerisque vitae. Suspendisse pulvinar nibh non orci aliquam, id porttitor neque eleifend. Donec vitae leo aliquam nulla tincidunt efficitur ut vel justo.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque imperdiet diam in sollicitudin convallis. In dictum, mi ut laoreet interdum, diam mi porttitor turpis, vitae semper sem nulla mattis nibh. Suspendisse luctus ipsum vel ante suscipit, vitae tempor dui mattis. Morbi aliquam lacus nibh, sit amet suscipit mi tincidunt vitae. Praesent maximus eget quam id facilisis. Cras porttitor suscipit eros in rhoncus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed imperdiet tincidunt mi, et imperdiet orci porta sagittis. Mauris varius est magna, eget tempor nibh pulvinar vitae. Suspendisse ornare elementum elit, in pretium mauris egestas in.

Donec tempor ex sed molestie ullamcorper. Duis eget leo pharetra, congue mauris ac, dictum ex. Praesent sit amet finibus dui. Integer sed cursus tortor. Sed enim eros, accumsan ac posuere ac, fringilla eget arcu. Nullam dignissim mauris vitae mauris pharetra sodales. Pellentesque eu dapibus dolor, ut consectetur arcu. Ut in fermentum nibh, sed efficitur lorem. Aliquam quis metus purus.

Fusce tortor elit, ultrices molestie ipsum ornare, scelerisque volutpat nisl. Nullam laoreet turpis purus, vel lobortis nisl feugiat sit amet. Praesent mi sapien, placerat a aliquam ac, consequat tempor erat. Fusce augue nisi, pellentesque vitae consectetur vitae, ultrices sed lacus. Quisque iaculis imperdiet pharetra. Integer mollis lorem sed arcu venenatis faucibus. Quisque ullamcorper, neque non eleifend mattis, turpis libero suscipit velit, sodales sodales sem ipsum non leo. Donec urna neque, elementum sed sollicitudin nec, condimentum ac nisl. In nec sodales urna, vitae feugiat ligula. Nullam ac nisl justo. Etiam laoreet, elit finibus ullamcorper interdum, risus erat ultrices nisl, a sodales libero urna eget nisi. Duis ultricies nunc libero, vel faucibus eros interdum sed. Aenean vitae fermentum magna. Nunc consectetur fermentum scelerisque. Proin ipsum nibh, condimentum ac imperdiet sed, facilisis vitae leo."
, '2017-03-12 18:45:00.000000', "images/nuitInges.jpg");

insert into EVENEMENT values
  (1, 1, "Nuit des ingés", "Batchanga", "St Patrick", "2017-03-23","23:00:00.000000", "2017-03-24", "05:00:00.000000", "8", "Bières : 1€", null, null, "images/nuitInges.jpg");
insert into EVENEMENT values
  (2, 2, "Nuit des ingés 2", "Batchanga", "St Patrick", "2017-03-28","23:00:00.000000", "2017-03-29", "05:00:00.000000", "8", "Bières : 1€", null, null, "images/nuitInges.jpg");
insert into EVENEMENT values
  (3, 1, "Nuit des ingés 3", "Batchanga", "St Patrick", "2017-03-23","23:00:00.000000", "2017-03-24", "05:00:00.000000", "8", "Bières : 1€", null, null, "images/nuitInges.jpg");
insert into EVENEMENT values
  (4, 1, "Nuit des ingés 4", "Batchanga", "St Patrick", "2017-03-23","23:00:00.000000", "2017-03-24", "05:00:00.000000", "8", "Bières : 1€", null, null, "images/nuitInges.jpg");



