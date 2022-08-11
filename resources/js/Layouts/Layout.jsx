import react from 'react'
import Navbar from '@/Components/Navbar'
import Footer from '@/Components/Footer'

export default function Layout({ children }) {
  return (
    <>
      <Navbar />
      <div className="flex flex-col w-full">
      </div>
      { children }
      <Footer />
    </>
  )
}