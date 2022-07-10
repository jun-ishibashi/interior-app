import React from "react";
import { useState } from "react";
import axios from "axios";



export default function Index(props) {

  console.log(props)
  return (
    <>
    <img src={props.images[0]} />
    </>
  )
}