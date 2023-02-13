import React from "react";
import { NavLink } from "react-router-dom";

const Header = () => {
  return (
    <>
            <NavLink 
            style={({ isActive}) =>({
                color: isActive ? 'red' : 'blue',
            })  //esto funciona para colocarle color 
        }
            to="/home">Home</NavLink>


            <NavLink 
                        style={({ isActive}) =>({
                            color: isActive ? 'red' : 'blue',
                        })  //esto funciona para colocarle color 
                    }
            to="/product">Product</NavLink>
    </>
  )
}
export default Header;
