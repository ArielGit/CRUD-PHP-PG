CREATE TABLE public.productos (
  id_producto SERIAL PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  descripcion VARCHAR(500) NOT NULL,
  categoria VARCHAR(50) NOT NULL,
  precio INTEGER
);

INSERT INTO productos 
						(id_producto, nombre, descripcion, categoria, precio) 
		 VALUES (DEFAULT,nike,rojos,deportivo,1200);