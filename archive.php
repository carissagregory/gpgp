.gameCardImage {
  margin: 0;
  padding: 0;
  line-height: 0;
}

.gameCardImage img {
  border-radius: 0;
  margin: 0;
}

.gameCardContent {
  padding: 8px;
  margin: 0;
  border-radius: 0;
  height: 220px;
}

.gameCardContent,
.gameCardContent p,
.gameCardContent div {
  font-family: "Lato", sans-serif;
}

.gameGrid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px 6px;
  margin-top: 0;
  padding-top: 0;
}

.gameCardTitle {
  text-align: center;
}

.gameCard {
  margin-bottom: 12px;
  padding: 0;
}

.gameGrid > [class*='col-'] {
  padding-right: 3px;
  padding-left: 3px;
}