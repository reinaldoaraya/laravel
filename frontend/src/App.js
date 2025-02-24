import { useEffect, useState } from 'react';
import api from './api';

function App() {
  const [pruebas, setPruebas] = useState([]);

  useEffect(() => {
    api.get('/pruebas')
      .then(response => setPruebas(response.data))
      .catch(error => console.error('Error al obtener datos:', error));
  }, []);

  return (
    <div>
      <h1>Datos desde Laravel</h1>
      <ul>
        {pruebas.map((prueba, index) => (
          <li key={index}>{prueba.nombre} - {prueba.valor}</li>
        ))}
      </ul>
    </div>
  );
}

export default App;
