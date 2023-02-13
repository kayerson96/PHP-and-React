import { BrowserRouter, Routes, Route } from 'react-router-dom';

//importar nuestros componentes
import ShowProducts from './components/ShowProducts';
import CreateProduct from './components/CreateProduct';
import EditProduct from './components/EditProduct';
import Home from './components/pages/Home';
import Header from './components/Header';

function App() {
  return (
    <div className="App">   
      <BrowserRouter>
      <Header/>
        <Routes>
          <Route path='/home' element={ <Home/> } />
          <Route path='/product' element={ <ShowProducts/> } />
          <Route path='/create' element={ <CreateProduct/> } />
          <Route path='/edit/:id' element={ <EditProduct/> } />
          <Route path='/' element={ <Home/> } />
        </Routes>
      </BrowserRouter> 
    </div>
  );
}

export default App;