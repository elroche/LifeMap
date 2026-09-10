<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'events')]
    private Collection $users;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $details = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $startDate = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $endDate = null;

    #[ORM\Column(length: 255)]
    private ?string $datePrecision = null;

    #[ORM\Column]
    private ?int $effectif = null;

    #[ORM\Column]
    private ?bool $isFavorite = null;

    #[ORM\ManyToOne]
    private ?EventType $eventType = null;

    /**
     * @var Collection<int, Technology>
     */
    #[ORM\ManyToMany(targetEntity: Technology::class)]
    private Collection $technologies;

    /**
     * @var Collection<int, Tool>
     */
    #[ORM\ManyToMany(targetEntity: Tool::class)]
    private Collection $tools;

    /**
     * @var Collection<int, Skill>
     */
    #[ORM\ManyToMany(targetEntity: Skill::class)]
    private Collection $skills;

    /**
     * @var Collection<int, Framework>
     */
    #[ORM\ManyToMany(targetEntity: Framework::class)]
    private Collection $frameworks;

    /**
     * @var Collection<int, Database>
     */
    #[ORM\ManyToMany(targetEntity: Database::class)]
    private Collection $databaseList;

    /**
     * @var Collection<int, Api>
     */
    #[ORM\ManyToMany(targetEntity: Api::class)]
    private Collection $apis;

    /**
     * @var Collection<int, ProjectManagement>
     */
    #[ORM\ManyToMany(targetEntity: ProjectManagement::class)]
    private Collection $projectManagements;

    /**
     * @var Collection<int, Library>
     */
    #[ORM\ManyToMany(targetEntity: Library::class)]
    private Collection $libraries;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->technologies = new ArrayCollection();
        $this->tools = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->frameworks = new ArrayCollection();
        $this->databaseList = new ArrayCollection();
        $this->apis = new ArrayCollection();
        $this->projectManagements = new ArrayCollection();
        $this->libraries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): static
    {
        $this->details = $details;

        return $this;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeImmutable $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeImmutable $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getDatePrecision(): ?string
    {
        return $this->datePrecision;
    }

    public function setDatePrecision(string $datePrecision): static
    {
        $this->datePrecision = $datePrecision;

        return $this;
    }

    public function getEffectif(): ?int
    {
        return $this->effectif;
    }

    public function setEffectif(int $effectif): static
    {
        $this->effectif = $effectif;

        return $this;
    }

    public function isFavorite(): ?bool
    {
        return $this->isFavorite;
    }

    public function setIsFavorite(bool $isFavorite): static
    {
        $this->isFavorite = $isFavorite;

        return $this;
    }

    public function getEventType(): ?EventType
    {
        return $this->eventType;
    }

    public function setEventType(?EventType $eventType): static
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * @return Collection<int, Technology>
     */
    public function getTechnologies(): Collection
    {
        return $this->technologies;
    }

    public function addTechnology(Technology $technology): static
    {
        if (!$this->technologies->contains($technology)) {
            $this->technologies->add($technology);
        }

        return $this;
    }

    public function removeTechnology(Technology $technology): static
    {
        $this->technologies->removeElement($technology);

        return $this;
    }

    /**
     * @return Collection<int, Tool>
     */
    public function getTools(): Collection
    {
        return $this->tools;
    }

    public function addTool(Tool $tool): static
    {
        if (!$this->tools->contains($tool)) {
            $this->tools->add($tool);
        }

        return $this;
    }

    public function removeTool(Tool $tool): static
    {
        $this->tools->removeElement($tool);

        return $this;
    }

    /**
     * @return Collection<int, Skill>
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): static
    {
        if (!$this->skills->contains($skill)) {
            $this->skills->add($skill);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): static
    {
        $this->skills->removeElement($skill);

        return $this;
    }

    /**
     * @return Collection<int, Framework>
     */
    public function getFrameworks(): Collection
    {
        return $this->frameworks;
    }

    public function addFramework(Framework $framework): static
    {
        if (!$this->frameworks->contains($framework)) {
            $this->frameworks->add($framework);
        }

        return $this;
    }

    public function removeFramework(Framework $framework): static
    {
        $this->frameworks->removeElement($framework);

        return $this;
    }

    /**
     * @return Collection<int, Database>
     */
    public function getDatabaseList(): Collection
    {
        return $this->databaseList;
    }

    public function addDatabaseList(Database $databaseList): static
    {
        if (!$this->databaseList->contains($databaseList)) {
            $this->databaseList->add($databaseList);
        }

        return $this;
    }

    public function removeDatabaseList(Database $databaseList): static
    {
        $this->databaseList->removeElement($databaseList);

        return $this;
    }

    /**
     * @return Collection<int, Api>
     */
    public function getApis(): Collection
    {
        return $this->apis;
    }

    public function addApi(Api $api): static
    {
        if (!$this->apis->contains($api)) {
            $this->apis->add($api);
        }

        return $this;
    }

    public function removeApi(Api $api): static
    {
        $this->apis->removeElement($api);

        return $this;
    }

    /**
     * @return Collection<int, ProjectManagement>
     */
    public function getProjectManagements(): Collection
    {
        return $this->projectManagements;
    }

    public function addProjectManagement(ProjectManagement $projectManagement): static
    {
        if (!$this->projectManagements->contains($projectManagement)) {
            $this->projectManagements->add($projectManagement);
        }

        return $this;
    }

    public function removeProjectManagement(ProjectManagement $projectManagement): static
    {
        $this->projectManagements->removeElement($projectManagement);

        return $this;
    }

    /**
     * @return Collection<int, Library>
     */
    public function getLibraries(): Collection
    {
        return $this->libraries;
    }

    public function addLibrary(Library $library): static
    {
        if (!$this->libraries->contains($library)) {
            $this->libraries->add($library);
        }

        return $this;
    }

    public function removeLibrary(Library $library): static
    {
        $this->libraries->removeElement($library);

        return $this;
    }
}
