import React, {useState} from 'react'

const Like =()=> {
    const [likes, setLikes]=useState(0);
    return ( 
        <button className='btn btn-primary'  onClick={()=>setLikes(likes +1)}>{likes} like</button>
    );
  }

export default Like;