use restaurant;
insert into Plato (`nombre`,
 `Primavera`, `Verano`, `Otono`, `Invierno`, `Gluten`, `Crustaceo`, `Huevo`, `Pescado`, `Cacahuete`,
 `Soja`, `Lacteos`, `Cascara`, `Apio`, `Mostaza`, `Sesamo`, `Sulfitos`, `Altramuces`, `Moluscos`) VALUES 
 ("Hilos de Pasta con emulsión de tomate y perejil", 
 true, false, false, true, true, false, false, false, false, 
 false, false, false, false, false, false, false, false, false),
 ("Hilos de Pasta con desmechado de bonito", 
 false, true, false, false, true, false, false, true, false, 
 false, false, false, false, false, false, false, false, false),
 ("Ensalada clásica", 
 true, true, false, false, false, false, false, false, false, 
 false, false, false, false, false, false, false, false, false),
 ("Ensalada Surtida a la emulsión de Pedro Ximénez", 
 true, true, false, false, false, false, true, true, true, 
 true, false, false, true, false, false, true, false, false),
 ("Caldo avícola cuajado de pasta y pan cúbico crujiente", 
 false, false, true, true, true, false, false, false, false, 
 false, false, false, false, false, false, false, false, false);
 
 /* Password = paso */
 insert into Config (`Temporada`, `Password`) VALUES 
 ("Primavera", "d63c223383eae016bdd35fd0521e00dabf533b2485f80bae195277a0b5079f50ec286cacea7dc21cc8b849451d7c7226d6616df3e8a92829180ee83ceb71cfa0");