<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Product::class)]
    private Collection $attachedProducts;

    public function __construct()
    {
        $this->attachedProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getAttachedProducts(): Collection
    {
        return $this->attachedProducts;
    }

    public function addAttachedProduct(Product $attachedProduct): static
    {
        if (!$this->attachedProducts->contains($attachedProduct)) {
            $this->attachedProducts->add($attachedProduct);
            $attachedProduct->setCategorie($this);
        }

        return $this;
    }

    public function removeAttachedProduct(Product $attachedProduct): static
    {
        if ($this->attachedProducts->removeElement($attachedProduct)) {
            // set the owning side to null (unless already changed)
            if ($attachedProduct->getCategorie() === $this) {
                $attachedProduct->setCategorie(null);
            }
        }

        return $this;
    }
}
