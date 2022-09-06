import Layout from "@/Layouts/Layout";
import React from "react";
import Index from "./Post/Index";

export default function Home(props) {
  return (
    <>
      <Layout {...props}>
        <Index {...props} />
      </Layout>
    </>
  )
}